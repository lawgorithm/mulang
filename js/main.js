$(document).ready(function() {
	$('body').append("<audio id='notePlayer' autoplay='true'></audio>")
	$noteBtn = $(".noteContainer button");
	$noteBtn.click(function() {
		notePath = "assets/" + this.id + "-3.wav";
		$("#notePlayer").attr({src:notePath, type:"audio/wav"});
	});

	$(".glyphicon-play").click(function() {
		var m = new Mulang();
		m.play();
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
	this.solution;
	this.streak = 0;
	this.isRunning = true;
	this.correctAlert = "<div class='alert alert-success' role='alert'><strong>Well done!</strong></div>";
	this.incorrectAlert = "<div class='alert alert-warning' role='alert'>Guess again</div>";
	this.stopGlyph = "<span class='glyphicon glyphicon-stop'></span>";
	this.playGlygh = "<span class='glyphicon glyphicon-play playMulang'></span>";
	this.initialize = function() {

	};
	this.play = function() {
		console.log("im playing");
		this.setSolution();
		$('.mulang-control').each(function(){
			$(this).off("click").removeClass('glyphicon-play').addClass('glyphicon-stop');
		});
		$('.mulang-control').each(function(){
			$(this).click(function(){
				_m.stop();
			});
		});
		
		var guessAlert = "<div class='alert alert-info' role='alert'><strong>Which note is this?</strong></div>";
		$(".mulang-player").attr('src', "random/");
		$(".mulang-message").html(guessAlert);
		$(".noteContainer button").click(function(){
			console.log("Solution:" + _m.solution);
			console.log("ID:" + this.id);
			if (this.id != _m.solution) {
				$(".mulang-message").html(_m.incorrectAlert);
			}
			else if (this.id === _m.solution) {
				$(".mulang-message").html(_m.correctAlert);
				setTimeout(function(){_m.play();},2000); // run donothing after 0.5 seconds
			}
		});
	};
	this.stop = function() {
		$('.mulang-control').each(function(){
			$(this).off("click").removeClass('glyphicon-stop').addClass('glyphicon-play');
		});
		$('.mulang-control').each(function(){
			$(this).click(function(){
				_m.play();
			});
		});
		$(".mulang-message").html("");

	};
	this.setSolution = function() {
		this.solution = this.notes[Math.floor(Math.random()*this.notes.length)];
		var notePath = "assets/" + this.solution + "-3.wav";
		$("#mulang-player").attr({src:notePath, type:"audio/wav"});
	};

}