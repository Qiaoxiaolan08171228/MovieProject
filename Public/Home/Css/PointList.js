function show(n) {
				var cur=container.querySelector("div[style]");
				if (cur.id!="content"+n) {
				cur.removeAttribute("style");
				document.getElementById("content"+n).style.zIndex="1";
	}
}
