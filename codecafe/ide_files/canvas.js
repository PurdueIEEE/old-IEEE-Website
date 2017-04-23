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

  function removeIframe() {
    $('#iframe').remove();
  }

	function runData() {
		save();
    removeIframe();
    $('<iframe />');  // Create an iframe element
    $('<iframe />', {
      id: 'iframe',
      src: 'iframe.html'
    }).appendTo('body');

    $('body').append('<button class="remove" onclick="removeFrame();">Remove</button><div class="cover"></div>');

    setTimeout(function() {
      $('#iframe').contents().find('#canvasScript').html(myCodeMirror.getValue());
      $('#iframe').focus();
    }, 300);

	}

  function removeFrame() {
    removeIframe();
    $('.cover').remove();
    $('.remove').remove();
  }

	function clearIDE() {
		myCodeMirror.setValue("");
		
		myCodeMirror.focus();
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
