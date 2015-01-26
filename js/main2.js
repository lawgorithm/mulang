  function BufferLoader(context, noteList, callback) {
    this.context = context;
    this.noteList = noteList;
    this.onload = callback;
    this.bufferList = {};
    this.loadCount = 0;
  }

  BufferLoader.prototype.loadBuffer = function(note /*, index */ ) {
    // Load buffer asynchronously
    var request = new XMLHttpRequest();
    request.open('GET', 'assets/' + note + '-3.wav', true);
    request.responseType = "arraybuffer";

    var loader = this;

    request.onload = function() {

      // Asynchronously decode the audio file data in request.response
      loader.context.decodeAudioData(request.response, function(buffer) {
        if (!buffer) {
          alert('error decoding file data: ' + note);
          return;
        }

        loader.bufferList[note] = buffer;

        if (++loader.loadCount == loader.noteList.length) {
          loader.onload(loader.bufferList);
        }
      });
    }

    request.onerror = function() {
      console.log('BufferLoader: XHR error');
    }

    request.send();
  }

  BufferLoader.prototype.load = function() {
    for (var i = 0; i < this.noteList.length; ++i)
      this.loadBuffer(this.noteList[i]);
  }



  window.onload = init;

  var context;
  var bufferLoader;
  var noteList = ["c", "d-flat", "d", "e-flat", "e", "f", "g-flat", "g", "a-flat", "a", "b-flat", "b"];

  function init() {
    context = new (window.AudioContext || window.webkitAudioContext)();

    bufferLoader = new BufferLoader(context, noteList, finishedLoading);

    bufferLoader.load();
  }

  function finishedLoading(bufferList) {

    // Create empty source object
    var source = {};

    // set listener for each notebutton
    for (var i = 0; i < noteList.length; ++i) {

      // Get element with note
      document.getElementById(noteList[i]).addEventListener("click", function() {
          source[this.id] = context.createBufferSource();
          source[this.id].buffer = bufferList[this.id];
          source[this.id].connect(context.destination);
          source[this.id].start(0);
        });
    }
  }
