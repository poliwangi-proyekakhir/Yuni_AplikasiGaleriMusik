@extends('layout.main')
@section('title', 'Web')

{{-- <script type="text/javascript">


    var webaudio_tooling_obj = function () {
  
      var audioContext = new AudioContext();
  
      console.log("audio is starting up ...");
  
      var BUFF_SIZE = 16384;
  
      var audioInput = null,
          microphone_stream = null,
          gain_node = null,
          script_processor_node = null,
          script_processor_fft_node = null,
          analyserNode = null;
  
      if (!navigator.getUserMedia)
              navigator.getUserMedia = navigator.getUserMedia || navigator.webkitGetUserMedia ||
                            navigator.mozGetUserMedia || navigator.msGetUserMedia;
  
      if (navigator.getUserMedia){
  
          navigator.getUserMedia({audio:true}, 
            function(stream) {
                start_microphone(stream);
            },
            function(e) {
              alert('Error capturing audio.');
            }
          );
  
      } else { alert('getUserMedia not supported in this browser.'); }
  
      // ---
  
      function show_some_data(given_typed_array, num_row_to_display, label) {
  
          var size_buffer = given_typed_array.length;
          var index = 0;
          var max_index = num_row_to_display;
  
          console.log("__________ " + label);
  
          for (; index < max_index && index < size_buffer; index += 1) {
  
              console.log(given_typed_array[index]);
          }
      }
  
      function process_microphone_buffer(event) { // invoked by event loop
  
          var i, N, inp, microphone_output_buffer;
  
          microphone_output_buffer = event.inputBuffer.getChannelData(0); // just mono - 1 channel for now
  
          // microphone_output_buffer  <-- this buffer contains current gulp of data size BUFF_SIZE
  
          show_some_data(microphone_output_buffer, 5, "from getChannelData");
      }
  
      function start_microphone(stream){
  
        gain_node = audioContext.createGain();
        gain_node.connect( audioContext.destination );
  
        microphone_stream = audioContext.createMediaStreamSource(stream);
        microphone_stream.connect(gain_node); 
  
        script_processor_node = audioContext.createScriptProcessor(BUFF_SIZE, 1, 1);
        script_processor_node.onaudioprocess = process_microphone_buffer;
  
        microphone_stream.connect(script_processor_node);
  
        // --- enable volume control for output speakers
  
        document.getElementById('volume').addEventListener('change', function() {
  
            var curr_volume = this.value;
            gain_node.gain.value = curr_volume;
  
            console.log("curr_volume ", curr_volume);
        });
  
        // --- setup FFT
  
        script_processor_fft_node = audioContext.createScriptProcessor(2048, 1, 1);
        script_processor_fft_node.connect(gain_node);
  
        analyserNode = audioContext.createAnalyser();
        analyserNode.smoothingTimeConstant = 0;
        analyserNode.fftSize = 2048;
  
        microphone_stream.connect(analyserNode);
  
        analyserNode.connect(script_processor_fft_node);
  
        script_processor_fft_node.onaudioprocess = function() {
  
          // get the average for the first channel
          var array = new Uint8Array(analyserNode.frequencyBinCount);
          analyserNode.getByteFrequencyData(array);
  
          // draw the spectrogram
          if (microphone_stream.playbackState == microphone_stream.PLAYING_STATE) {
  
              show_some_data(array, 5, "from fft");
          }
        };
      }
  
    }(); //  webaudio_tooling_obj = function()
  
  
  
  </script>
   --}}

{{-- @yield('container') --}}

@section('container')


<main class="main-content">
    <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1919x388.jpg">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-lg-12">
                    <div class="breadcrumb-item">
                        <h1 class="breadcrumb-heading">Tune your guitar</h1>
                        {{-- <ul>
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>Stem</li>
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Begin about Area -->
    <div class="about-area section-space-top-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="about-content">
                        {{-- <h2 class="about-title">How to tune up?</h2>
                        <p class="about-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                            in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur
                            sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est
                            laborum. Sed ut perspiciatis</p> --}}
                    </div>
                </div>
               
           
                  
{{-- <div class="modal quick-view-modal fade" id="tuning" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="tuning" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-tippy="Close"
            data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true"
            data-tippy-theme="sharpborder">
          </button>
        </div>
            <div class="modal-body">
                <div class="modal-wrap row" >
                    <div class="col-lg-12 d-flex justify-content-center">
                        <div class="modal-img img-center">
                            {!! QrCode::size(300)->generate('https://smartphone.edgeimpulse.com/index.html?apiKey=ei_e0050bfeee3ce81e23ec498be73a5caf7ac8aa388c1ddc1fbed936f3a7a15ffd'); !!}
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </div>
</div> --}}

{{-- manggil tuning --}}
    <div class="about-area section-space-top-95 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrap p-4">
                        <h1>Tuning Gitar <a href="http://localhost:4820/classifier.html"   class="btn btn-pronia-primary" > Start</a></h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col text-left">
        <select class="nice-select" id="selection">
            <option value="">- Select Chord -</option>
            <option value="a">a</option>
            <option value="a">a</option>
            <option value="a">a</option>
            <option value="a">a</option>
        </select>
    </div> --}}
{{-- manggil tuning --}} 

    <div class="about-area section-space-top-95 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-wrap p-4">
                        <h3>Ikut berpartisipasi mengunggah kunci gitar dengan variasimu sekarang!</h3>
                        &nbsp;&nbsp;
                        <a href="{{ url('/stemadd') }}" class="text-right btn btn-pronia-primary"> Mulai!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End about Area -->

</main>
<script>
    function tunning() {
        
        const getURL = async () => {
  // inspect if the callback is working at: http://127.0.0.1:4040/inspect/http 
  const ngrok = await import('ngrok')
  const api = ngrok.getApi();
  const { tunnels } = JSON.parse(await api?.get('api/tunnels') ?? '{}')
  // if we already have a tunnel open, disconnect. We're only allowed to have 4
  if (tunnels?.length > 0) await ngrok.disconnect()
  return await ngrok.connect(3000)
}
    }
   

    function func(){	
	var SchoolId  = document.getElementById('selection').value;
	window.location.href = "http://localhost:4820/classifier.html?id=" + SchoolId;
}
    </script>
@endsection
