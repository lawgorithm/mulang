$(document).ready(function() {

	$(".glyphicon").css({cursor:"pointer"});
	$(".glyphicon-stop").fadeOut("fast");
	$('body').append("<audio id='notePlayer' autoplay='true'></audio>")
	$noteBtn = $(".noteContainer button");
	$noteBtn.click(function() {
		notePath = "assets/" + this.id + "-3.wav";
		$("#notePlayer").attr({src:notePath, type:"audio/wav"});
	});

	var m = new Mulang();

	$(".glyphicon-play").click(function() {
		$(this).hide();
		$(".noteContainer button").click(function(){
			if (this.id != m.solution) {
				$(".mulang-message").html(m.incorrectAlert);
			}
			else if (this.id === m.solution) {
				$(".mulang-message").html(m.correctAlert);
				setTimeout(function(){m.play();},2000); // run donothing after 0.5 seconds
			}
		});
		$(".glyphicon-stop").fadeIn("slow");
		m.play();
	});


	$(".glyphicon-stop").click(function(){
		$(this).hide();
		m.stop();
		$(".glyphicon-play").fadeIn("fast");
		$noteBtn.off("click").click(function() {
			notePath = "assets/" + this.id + "-3.wav";
			$("#notePlayer").attr({src:notePath, type:"audio/wav"});
		});

	});

	$("#horse").click(function() {
		$("#notePlayer").attr('src', "../wash/horse.ogg");
	});
	$("#random").click(function() {
		$("#notePlayer").attr('src', "random/");
	});
});

function Mulang() {

	var _m = this;
	this.notes = ["a","a-flat","b","b-flat","c","d","d-flat","e","e-flat","f","g-flat","g"];
	this.streak = 0;
	this.correctAlert = "<div class='alert alert-success' role='alert'><strong>Well done!</strong></div>";
	this.incorrectAlert = "<div class='alert alert-warning' role='alert'><strong>Guess again</strong></div>";
	this.guessAlert = "<div class='alert alert-info' role='alert'><strong>Which note is this?</strong></div>";
	this.stopGlyph = "<span class='glyphicon glyphicon-stop'></span>";
	this.playGlygh = "<span class='glyphicon glyphicon-play playMulang'></span>";
	this.initialize = function() {

	};
	this.play = function() {
		this.setSolution();

		$(".mulang-player").attr('src', "random/");
		$(".mulang-message").html(this.guessAlert);
	}
	this.stop = function() {
		$(".mulang-message").html("");
	};
	this.setSolution = function() {
		this.solution = this.notes[Math.floor(Math.random()*this.notes.length)];
		var notePath = "assets/" + this.solution + "-3.wav";
		$("#mulang-player").attr({src:notePath, type:"audio/wav"});
	};

}