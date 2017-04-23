	var saveTimeout;

	function save() {
		if (saveTimeout) clearTimeout(saveTimeout);
    
		localStorage.setItem("codeCafe_text", myCodeMirror.getValue());
		$("#save").html("Saved!");

		var saveTimeout = setTimeout(function() {
			$("#save").html("Save");
		}, 1000);
	
		myCodeMirror.focus();
	}

	function runData() {
		save();
		try {
			var result = eval(String(myCodeMirror.getValue()));
		} catch (e) {
			console.log(e);
			result = e.message;
			$("#rightText").val($("#rightText").val() +"\n"+ ">: "+result);
		}
	}

	function clearIDE() {
		myCodeMirror.setValue("");
		
		myCodeMirror.focus();
	}
	
	function clearTerminal() {
		$("#rightText").val("");
		
		myCodeMirror.focus();
	}

	function Print(input) {
		var result;
		var answer = "Hello";
	
		if (typeof(input) === 'string') {
			result = input.trim();
		} else if(typeof(input) === 'boolean') {
			console.log("Boolean: "+input)
			result = input;
		} else {
			result = eval(String(input))
		}
     
		$("#rightText").val($("#rightText").val() +"\n"+ ">: "+result);
		dispRepeat = input;
		$("#rightText").animate({ scrollTop: "+=200"},1);
	}

	function switchTheme() {
		var theme = localStorage.getItem("theme");

		if (theme === "dark") {
			myCodeMirror.setOption("theme", "xq-light");
			localStorage.setItem("theme", "light");
			$("#dark").html("Dark");
		} else {
			myCodeMirror.setOption("theme", "monokai");
			localStorage.setItem("theme", "dark");
			$("#dark").html("Light");
		}
		
		myCodeMirror.focus();
	}
	
	function fontInc() {
		var fontSize = parseInt(localStorage.getItem("fontSize"));
		if (fontSize >= 56) return;
		fontSize = fontSize+2;
		$('.CodeMirror').css("font-size", fontSize+"px");
		$('#rightText').css("font-size", fontSize+"px");
		localStorage.setItem("fontSize", fontSize);
		myCodeMirror.refresh();
		myCodeMirror.focus();
	}
	
	function fontDec() {
		var fontSize = parseInt(localStorage.getItem("fontSize"));
		if (fontSize <= 2) return;
		fontSize = fontSize-2;
		$('.CodeMirror').css("font-size", fontSize+"px");
		$('#rightText').css("font-size", fontSize+"px");
		localStorage.setItem("fontSize", fontSize);	
		myCodeMirror.refresh();
		myCodeMirror.focus();
	}
  
	window.print = Print;
