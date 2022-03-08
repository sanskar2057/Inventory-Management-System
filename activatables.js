

var activatables = (function () {

var activeClass = 'active';
var inactiveClass = 'inactive';

var anchors = {}, activates = {};
var regex = /#([A-Za-z][A-Za-z0-9:._-]*)$/;


var temp = document.getElementsByTagName('a');
for (var i = 0; i < temp.length; i++) {
	var a = temp[i];

	
	if ((a.pathname != location.pathname &&
		'/' + a.pathname != location.pathname) ||
		a.search != location.search) continue;

	
	var match = regex.exec(a.href);
	if (!match) continue;
	var id = match[1];

	
	if (id in anchors)
		anchors[id].push(a);
	else
		anchors[id] = [a];
}


function setClass(elem, active) {
	var classes = elem.className.split(/\s+/);
	var cls = active ? activeClass : inactiveClass, found = false;
	for (var i = 0; i < classes.length; i++) {
		if (classes[i] == activeClass || classes[i] == inactiveClass) {
			if (!found) {
				classes[i] = cls;
				found = true;
			} else {
				delete classes[i--];
			}
		}
	}

	if (!found) classes.push(cls);
	elem.className = classes.join(' ');
}


function getParams() {
	var hash = location.hash || '#';
	var parts = hash.substring(1).split('&');

	var params = {};
	for (var i = 0; i < parts.length; i++) {
		var nv = parts[i].split('=');
		if (!nv[0]) continue;
		params[nv[0]] = nv[1] || null;
	}
	
	return params;
}

function setParams(params) {
	var parts = [];
	for (var name in params) {
		parts.push(params[name] ? name + '=' + params[name] : name);
	}

	location.hash = knownHash = '#' + parts.join('&');
}


var knownHash = location.hash;
function pollHash() {
	var hash = location.hash;
	if (hash != knownHash) {
		var params = getParams();
		for (var name in params) {
			if (!(name in activates)) continue;
			activates[name](params[name]);
		}
		knownHash = hash;
	}
}
setInterval(pollHash, 250);

function getParam(name) {
	var params = getParams();
	return params[name];
}

function setParam(name, value) {
	var params = getParams();
	params[name] = value;
	setParams(params);
}


var initialId = null;
var match = regex.exec(knownHash);
if (match) {
	initialId = match[1];

}


function makeActivatable(paramName, activatables) {
	var all = {}, first = initialId;


	function activate(id) {
		if (!(id in all)) return false;

		for (var cur in all) {
			if (cur == id) continue;
			for (var i = 0; i < all[cur].length; i++) {
				setClass(all[cur][i], false);
			}
		}

		for (var i = 0; i < all[id].length; i++) {
			setClass(all[id][i], true);
		}

		setParam(paramName, id);

		return true;
	}

	activates[paramName] = activate;

	function attach(item, basePath) {
		if (item instanceof Array) {
			for (var i = 0; i < item.length; i++) {
				attach(item[i], basePath);
			}
		} else if (typeof item == 'object') {
			for (var p in item) {
				var path = attach(p, basePath);
				attach(item[p], path);
			}
		} else if (typeof item == 'string') {
			var path = basePath ? basePath.slice(0) : [];
			var e = document.getElementById(item);
			if (!e) throw 'Could not find "' + item + '".'
			path.push(e);

			if (!first) first = item;


			all[item] = path;

			if (item in anchors) {

				var func = (function (id) {
					return function (e) {
						activate(id);

						if (!e) e = window.event;
						if (e.preventDefault) e.preventDefault();
						e.returnValue = false;
						return false;
					};
				})(item);

				for (var i = 0; i < anchors[item].length; i++) {
					var a = anchors[item][i];

					if (a.addEventListener) {
						a.addEventListener('click', func, false);
					} else if (a.attachEvent) {
						a.attachEvent('onclick', func);
					} else {
						throw 'Unsupported event model.';
					}

					all[item].push(a);
				}
			}

			return path;
		} else {
			throw 'Unexpected type.';
		}

		return basePath;
	}

	attach(activatables);


	if (first) activate(getParam(paramName)) || activate(first);
}

return makeActivatable;
})();