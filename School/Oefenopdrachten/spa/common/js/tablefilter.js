/**
 * tablefilter.js
 * (C) Frans Spijkerman 2018
 * sorting and filtering for html-tables
 */

// adds a filter to all columns with <th class="filter">
// adds sorting to all columns with <th class="sort">
// set class to "number" in all cells under <th class="number">

Object.prototype.getAncestor = function (tagName) {
    tagName = tagName.toUpperCase();
    var parent = this;
    while (parent.tagName !== "HTML" && parent.tagName !== tagName) {
        parent = parent.parentElement;
    }
    return parent;
};

var sorted = -1;
window.onload = function (e) {
    var tables = document.getElementsByTagName('table');
    for (var i = 0; i < tables.length; i++) {
        var table = tables[i];
        var thead = table.tHead;
        var head = thead.rows[0];

        var rows = table.tBodies[0].rows;
        if (rows.length <= 2) {
            continue;
        }

        var nfilters = 0;
        var xrow = document.createElement("tr");
        xrow.className += " filter";

        for (var colnum = 0; colnum < head.cells.length; colnum++) {
            var cell = head.cells[colnum];
            var type = 'text';
            if (cell.classList.contains('number')) {
                alignNumbers(table, colnum);
                type = 'number';
            }
            var text = "";
            var valueset = 0;
            if (cell.classList.contains('sort')) {
                valueset = getDistinctValues(table, colnum, type);
                if (valueset.length > 1) {
                    if (type == 'number') {
                        cell.onclick = function (e) {
                            applySortNumbers(e);
                        };
                    } else {
                        cell.onclick = function (e) {
                            applySortText(e);
                        };

                    }
                }
            }
            if (cell.classList.contains('filter')) {
                if (valueset === 0) {
                    valueset = getDistinctValues(table, colnum, type);
                }
                if (valueset.length > 1) {
                    text += makeSelect(valueset);
                }
            }
            var c = xrow.insertCell(-1);
            c.style.borderWidth = 0;
            if (text !== '') {
                c.innerHTML = text;
                nfilters++;
            }

        }
        if (nfilters > 0) {
            thead.appendChild(xrow);
        }
    }

};

function alignNumbers(table, colnum) {
    var rows = table.tBodies[0].rows;
    for (var i = 0; i < rows.length; i++) {
        var cell = rows[i].cells[colnum];
        cell.className += " number";
        cell.innerHTML = cell.innerHTML.replace('.', ',')
    }
}

function getDistinctValues(table, colnum, type) {
    var values = [];
    var rows = table.tBodies[0].rows;
    for (var i = 0; i < rows.length; i++) {
        var cell = rows[i].cells[colnum];
        var elems = cell.innerText.split(/(\s*,\s*|\s*<br>\s*|\r|\n)/);
        for (var j = 0; j < elems.length; j++) {
            var elem = elems[j].trim();
            if (type === 'number') {
                elem = parseFloat(elem);
            }
            if (elem !== '' && elem !== ',' && values.indexOf(elem) === -1) {
                values.push(elem);
            }
        }
    }
    if (type === 'number') {
        values.sort(function (a, b) {
            return a - b
        });
    } else {
        values.sort();
    }
    return values;
}

function makeSelect(values) {
    var r = "<select onchange='applyFilters(this);'><option></option>";
    for (var i = 0; i < values.length; i++) {
        r += "<option>" + values[i] + "</option>";
    }
    r += "</select>";
    return r;
}

function applyFilters(item) {
    debugger;
    var table = item.getAncestor('table');
    var head = table.tHead.rows;
    var rows = table.tBodies[0].rows;

//    for (var i = 0; i < rows.length; i++) {
//        var row = rows[i];
//        row.classList.remove('hidden');
//    }

    var isnum = new Array(head[0].cells.length);
    for (var colnum = 0; colnum < head[0].cells.length; colnum++) {
        isnum[colnum] = head[0].cells[colnum].classList.contains('number');
    }

    table.style.display = 'none';
    for (var i = 0; i < rows.length; i++) {
        var row = rows[i];
        row.classList.remove('hidden');
        for (var colnum = 0; colnum < row.cells.length; colnum++) {
            var select = table.rows[1].cells[colnum].getElementsByTagName('select');
            if (select.length === 0) {
                continue;
            }
            var filter = select[0].value.trim();
            if (filter === "") {
                continue;
            }
            if (isnum[colnum]) {
                filter = parseFloat(filter);
                var value = row.cells[colnum].innerText.trim();
                if (parseFloat(value) !== filter) {
                    row.classList.add('hidden');
                    break;
                }
            } else {
                var value = row.cells[colnum].innerText.trim();
//                if (value !== filter) {
//                    row.classList.add('hidden');
//                    break;
//                }
                
                if (value.indexOf(filter) === -1) {
                    row.classList.add('hidden');
                    break;
                }
            }
        }
    }
    table.style.display = '';
}


function applySortText(e) {
    return applySort(e, 'text');
}

function applySortNumbers(e) {
    return applySort(e, 'number');
}

function applySort(e, type) {
    var cell = e.target;
    var table = cell.getAncestor('table');
    var colnum = cell.cellIndex;
    var rows = table.tBodies[0].rows;

    if (sorted === colnum) {
        dir = -1;
        sorted = -1;
    } else {
        dir = 1;
        sorted = colnum;
    }

    // fill an array with key from the column and html of the whole row
    var arr = new Array();
    for (i = 0; i < rows.length; i++) {
        var row = rows[i];
        if (type === 'number') {

            arr.push({
                key: parseFloat(row.cells[colnum].innerHTML),
                row: row.outerHTML
            });
        } else {
            arr.push({
                key: row.cells[colnum].innerHTML,
                row: row.outerHTML
            });
        }
    }

    // sort the array by the specified order (dir)
    arr.sort(function (a, b) {
        return (a.key === b.key) ? 0 : ((a.key > b.key) ? dir : -dir);
    });
    
    // replace existing rows with rows from the sorted array
    table.style.display = 'none';
    for (i = 0; i < rows.length; i++) {
        rows[i].outerHTML = arr[i].row;
    }
    table.style.display = '';
}
