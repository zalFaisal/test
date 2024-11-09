<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Learnoscope | Cek Paru-Paru</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700" rel="stylesheet">
	<link rel="shortcut icon" href="<?php echo base_url();?>/assets/images/cardiogram.png?04040">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/owl.theme.default.min.css">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url();?>/assets/js/modernizr-2.6.2.min.js"></script>
	<script src="https://unpkg.com/wavesurfer.js@7"></script>
	<script src="https://unpkg.com/wavesurfer.js@7/dist/plugins/regions.min.js"></script>
	<script src="<?php echo base_url();?>/assets/RecordRTC.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	</head>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu" style="box-shadow: 2px 0px 5px rgba(0,0,0,0.8);">
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<div id="colorlib-logo"><img src="<?php echo base_url();?>/assets/images/cardiogram.png" width="50" height="50" style="padding-right:10px; "><a href="index.html" style="color:#B31C45;">LEARNOSCOPE</a></div>
						</div>
						<div class="col-md-8 text-right menu-1">
							<ul>
								<li><a href="<?php echo site_url('');?>">Cek Jantung</a></li>
                                <li><a href="<?php echo site_url('cekparu');?>">Cek Paru-Paru</a></li>
								<li class="btn-cta" style="background-color: #FCF5E5;"><a href="#"><span>FaQ</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>
		
		
		<div id="colorlib-intro">
		<div class="colorlib-trainers">
			<div class="container">
				<div class="row" id="waveform">
					<div class="panel-group">
            <div class="panel panel-warning">
                <div class="panel-heading">Rekam Detak Paru-Paru</div>
                <div class="panel-body text-center">

                    <b class="text-red ">Gunakan stetoskop digital untuk merekam.

                    <div>
                        <audio controls autoplay playsinline></audio>
                    </div>
                    <hr>

                    <div id="record_btn_control" style="display: none">
                        <button id="btn-start-recording" class="btn btn-success">Mulai Merekam</button>
                        <button id="btn-stop-recording" class="btn btn-danger">Berhenti Merekam</button>
                        <button id="" class="btn btn-warning" onclick=" window.location='<?=site_url('cekparu');?>'">Cek Lagi</button>
                    </div>

                    <br>

                </div>
                <label>
    				Zoom: <input type="range" min="10" max="1000" value="100" id="slidermain" />
  				</label><br>
            </div>

        </div>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="panel-group">
            <div class="panel panel-success">
                <div class="panel-heading">Penjelasan</div>
                <p class="heading">1. Crackles (Fine)</p>
                <div id="waveform1"></div>
                <label>
    				Zoom: <input type="range" min="10" max="1000" value="100" id="slider1" />
  				</label><br>
                <button id="btnPlay1" class="btn btn-warning">Play/Pause</button>
                <br><br><br>
                <p class="heading">2. Rhonchi</p>
                <div id="waveform2"></div>
                <label>
    				Zoom: <input type="range" min="10" max="1000" value="100" id="slider2" />
  				</label><br>
                <button id="btnPlay2" class="btn btn-warning">Play/Pause</button><br><br><br>

                <p class="heading">3. Pernapasan Vesicular</p>
                <div id="waveform3"></div>
                <label>
    				Zoom: <input type="range" min="10" max="1000" value="100" id="slider3" />
  				</label><br>
                <button id="btnPlay3" class="btn btn-warning">Play/Pause</button>
                <br><br><br>
                <p class="heading">4. Stridor</p>
                <div id="waveform4"></div>
                <label>
    				Zoom: <input type="range" min="10" max="1000" value="100" id="slider4" />
  				</label><br>
                <button id="btnPlay4" class="btn btn-warning">Play/Pause</button><br><br><br>

                <p class="heading">5. Wheeze</p>
                <div id="waveform5"></div>
                <label>
    				Zoom: <input type="range" min="10" max="1000" value="100" id="slider5" />
  				</label><br>
                <button id="btnPlay5" class="btn btn-warning">Play/Pause</button>
                <br><br><br>
                <p class="heading">6. Crackles (Coarse)</p>
                <div id="waveform6"></div>
                <label>
    				Zoom: <input type="range" min="10" max="1000" value="100" id="slider6" />
  				</label><br>
                <button id="btnPlay6" class="btn btn-warning">Play/Pause</button><br><br><br>

                <p class="heading">7. Pleural Friction Rub</p>
                <div id="waveform7"></div>
                <label>
    				Zoom: <input type="range" min="10" max="1000" value="100" id="slider7" />
  				</label><br>
                <button id="btnPlay7" class="btn btn-warning">Play/Pause</button>
                <br><br><br>
                
            </div>

        </div>
				</div></div>	
		</div>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>

	<script src="https://unpkg.com/wavesurfer.js@7"></script>
	<script src="https://unpkg.com/wavesurfer.js@7/dist/plugins/regions.min.js"></script>
	<script type="module">
	const playButton1 = document.querySelector('#btnPlay1');
	const playButton2 = document.querySelector('#btnPlay2');
	const playButton3 = document.querySelector('#btnPlay3');
	const playButton4 = document.querySelector('#btnPlay4');
	const playButton5 = document.querySelector('#btnPlay5');
	const playButton6 = document.querySelector('#btnPlay6');
	const playButton7 = document.querySelector('#btnPlay7');
	const playButton8 = document.querySelector('#btnPlay8');
	const playButton9 = document.querySelector('#btnPlay9');
	const playButton10 = document.querySelector('#btnPlay10');

	const wavesurfer1 = WaveSurfer.create({
  container: '#waveform1',
  waveColor: '#B31C45',
  progressColor: '#B31C45',
  url: '<?=base_url();?>/assets/Detak/1109-1.mp3?0230',
})
wavesurfer1.once('decode', () => {
  const slider1 = document.querySelector('#slider1')

  slider1.addEventListener('input', (e) => {
    const minPxPerSec = e.target.valueAsNumber
    wavesurfer1.zoom(minPxPerSec)
  })
})
wavesurfer1.once('decode', () => {
playButton1.onclick = () => {
    wavesurfer1.playPause()
  }
})
 wavesurfer1.on('interaction', () => {
  wavesurfer1.play()
})
//---------------------------------------
 const wavesurfer2 = WaveSurfer.create({
  container: '#waveform2',
  waveColor: '#B31C45',
  progressColor: '#B31C45',
  url: '<?=base_url();?>/assets/Detak/1109-2.mp3?0230',
})
wavesurfer2.once('decode', () => {
  const slider2 = document.querySelector('#slider2')

  slider2.addEventListener('input', (e) => {
    const minPxPerSec = e.target.valueAsNumber
    wavesurfer2.zoom(minPxPerSec)
  })
})
wavesurfer2.once('decode', () => {
playButton2.onclick = () => {
    wavesurfer2.playPause()
  }
})
 wavesurfer2.on('interaction', () => {
  wavesurfer2.play()
})
 //---------------------------------------
 const wavesurfer3 = WaveSurfer.create({
  container: '#waveform3',
  waveColor: '#B31C45',
  progressColor: '#B31C45',
  url: '<?=base_url();?>/assets/Detak/1109-3.mp3?0230',
})
wavesurfer3.once('decode', () => {
  const slider3 = document.querySelector('#slider3')

  slider3.addEventListener('input', (e) => {
    const minPxPerSec = e.target.valueAsNumber
    wavesurfer3.zoom(minPxPerSec)
  })
})
wavesurfer3.once('decode', () => {
playButton3.onclick = () => {
    wavesurfer3.playPause()
  }
})
 wavesurfer3.on('interaction', () => {
  wavesurfer3.play()
})
//---------------------------------------
 const wavesurfer4 = WaveSurfer.create({
  container: '#waveform4',
  waveColor: '#B31C45',
  progressColor: '#B31C45',
  url: '<?=base_url();?>/assets/Detak/1109-4.mp3?0230',
})
wavesurfer4.once('decode', () => {
  const slider4 = document.querySelector('#slider4')

  slider4.addEventListener('input', (e) => {
    const minPxPerSec = e.target.valueAsNumber
    wavesurfer4.zoom(minPxPerSec)
  })
})
wavesurfer4.once('decode', () => {
playButton4.onclick = () => {
    wavesurfer4.playPause()
  }
})
 wavesurfer4.on('interaction', () => {
  wavesurfer4.play()
})
 //---------------------------------------
 const wavesurfer5 = WaveSurfer.create({
  container: '#waveform5',
  waveColor: '#B31C45',
  progressColor: '#B31C45',
  url: '<?=base_url();?>/assets/Detak/1109-5.mp3?0230',
})
wavesurfer5.once('decode', () => {
  const slider5 = document.querySelector('#slider5')

  slider5.addEventListener('input', (e) => {
    const minPxPerSec = e.target.valueAsNumber
    wavesurfer5.zoom(minPxPerSec)
  })
})
wavesurfer5.once('decode', () => {
playButton5.onclick = () => {
    wavesurfer5.playPause()
  }
})
 wavesurfer5.on('interaction', () => {
  wavesurfer5.play()
})
//---------------------------------------
 const wavesurfer6 = WaveSurfer.create({
  container: '#waveform6',
  waveColor: '#B31C45',
  progressColor: '#B31C45',
  url: '<?=base_url();?>/assets/Detak/1109-6.mp3?0230',
})
wavesurfer6.once('decode', () => {
  const slider6 = document.querySelector('#slider6')

  slider6.addEventListener('input', (e) => {
    const minPxPerSec = e.target.valueAsNumber
    wavesurfer6.zoom(minPxPerSec)
  })
})
wavesurfer6.once('decode', () => {
playButton6.onclick = () => {
    wavesurfer6.playPause()
  }
})
 wavesurfer6.on('interaction', () => {
  wavesurfer6.play()
})
 //---------------------------------------
 const wavesurfer7 = WaveSurfer.create({
  container: '#waveform7',
  waveColor: '#B31C45',
  progressColor: '#B31C45',
  url: '<?=base_url();?>/assets/Detak/1109-7.mp3?0230',
})
wavesurfer7.once('decode', () => {
  const slider7 = document.querySelector('#slider7')

  slider7.addEventListener('input', (e) => {
    const minPxPerSec = e.target.valueAsNumber
    wavesurfer7.zoom(minPxPerSec)
  })
})
wavesurfer7.once('decode', () => {
playButton7.onclick = () => {
    wavesurfer7.playPause()
  }
})
 wavesurfer7.on('interaction', () => {
  wavesurfer7.play()
})
//---------------------------------------

 //---------------------------------------
</script>



		<script>
const slidermain = document.querySelector('#slidermain');
    var load_rtc_interval = setInterval(function () {
        if (typeof RecordRTC == 'function') {
            clearInterval(load_rtc_interval);
            document.getElementById('record_btn_control').removeAttribute('style');

        }
    }, 1000);
    var audio = document.querySelector('audio');
    function captureMicrophone(callback) {
        if (microphone) {
            callback(microphone);
            return;
        }
        if (typeof navigator.mediaDevices === 'undefined' || !navigator.mediaDevices.getUserMedia) {
            alert('This browser does not supports WebRTC getUserMedia API.');
            if (!!navigator.getUserMedia) {
                alert('This browser seems supporting deprecated getUserMedia API.');
            }
        }
        navigator.mediaDevices.getUserMedia({
            audio: isEdge ? true : {
                echoCancellation: false
            }
        }).then(function (mic) {
            callback(mic);
        }).catch(function (error) {
            alert('Unable to capture your microphone. Please check console logs.');
            console.error(error);
        });
    }

    function replaceAudio(src) {
        var newAudio = document.createElement('audio');
        newAudio.controls = true;
        newAudio.autoplay = true;

        if (src) {
            newAudio.src = src;
        }

        var parentNode = audio.parentNode;
        parentNode.innerHTML = '';
        parentNode.appendChild(newAudio);

        audio = newAudio;
    }

    function stopRecordingCallback() {
        replaceAudio(URL.createObjectURL(recorder.getBlob()));
        const wavesurfer = WaveSurfer.create({
  container: '#waveform',
  waveColor: '#B31C45',
  progressColor: '#B31C45',
  media: audio,
})
wavesurfer.once('decode', () => {
  const slidermain = document.querySelector('#slidermain')

  slidermain.addEventListener('input', (e) => {
    const minPxPerSec = e.target.valueAsNumber
    wavesurfer.zoom(minPxPerSec)
  })
})
 wavesurfer.play();
 audio.stop();
 btnStartRecording.disabled = false;
 wavesurfer.on('interaction', () => {
  wavesurfer.play()
})
        

    }

    var isEdge = navigator.userAgent.indexOf('Edge') !== -1 && (!!navigator.msSaveOrOpenBlob || !!navigator.msSaveBlob);
    var isSafari = /^((?!chrome|android).)*safari/i.test(navigator.userAgent);

    var recorder; // globally accessible
    var microphone;

    var btnStartRecording = document.getElementById('btn-start-recording');
    var btnStopRecording = document.getElementById('btn-stop-recording');
    var btnSaveRecording = document.getElementById('btn-save-recording');


    btnStartRecording.onclick = function () {
        this.disabled = false;
        this.style.border = '';
        this.style.fontSize = '';
        if (!microphone) {
            captureMicrophone(function (mic) {
                microphone = mic;

                if (isSafari) {
                    replaceAudio();

                    audio.muted = true;
                    audio.srcObject = microphone;

                    btnStartRecording.disabled = false;
                    btnStartRecording.style.border = '1px solid red';
                    btnStartRecording.style.fontSize = '150%';

                    alert('Please click startRecording button again. First time we tried to access your microphone. Now we will record it.');
                    return;
                }

                click(btnStartRecording);
            });
            return;
        }

        replaceAudio();

        audio.muted = true;
        audio.srcObject = microphone;

        var options = {
            type: 'audio',
            numberOfAudioChannels: isEdge ? 1 : 2,
            checkForInactiveTracks: true,
            bufferSize: 16384
        };

        if (isSafari || isEdge) {
            options.recorderType = StereoAudioRecorder;
        }

        if (navigator.platform && navigator.platform.toString().toLowerCase().indexOf('win') === -1) {
            options.sampleRate = 48000; // or 44100 or remove this line for default
        }

        if (isSafari) {
            options.sampleRate = 44100;
            options.bufferSize = 4096;
            options.numberOfAudioChannels = 1;
        }

        if (recorder) {
            recorder.destroy();
            recorder = null;
        }
        options.numberOfAudioChannels = 1;
        options.recorderType = StereoAudioRecorder;
        recorder = RecordRTC(microphone, options);

        recorder.startRecording();

        btnStopRecording.disabled = false;
    };

    btnStopRecording.onclick = function () {
        this.disabled = false;

        microphone.stop();
        microphone = null;

        recorder.stopRecording(stopRecordingCallback);
    };


    btnSaveRecording.onclick = function () {
        // this.disabled = true;
        if (!recorder || !recorder.getBlob()) return;

        if (isSafari) {
            recorder.getDataURL(function (dataURL) {
                SaveToDisk(dataURL, getFileName('mp3'));
            });
            return;
        }

        var blob = recorder.getBlob();
        var file = new File([blob], getFileName('mp3'), {
            type: 'audio/mp3'
        });
        // invokeSaveAsDialog(file);

        var formData = new FormData();
        formData.append('new_voice_file', file);
        formData.append('new_voice_file_name',getFileName('mp3'));

        $.ajax({
            url: 'Artikel/save',
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(response) {
                console.log(response);
                console.log(response.url);

                response = JSON.parse(response);
                console.log(response);


                if(response.success){
                    alert('File Successfully Generated.');
                     var a = document.createElement("a");
                     a.href = response.url;
                     a.setAttribute("download", response.file_name);
                     a.click();
                     a.remove();

                }else{
                    alert(response.error);
                }
            },
            error: function(response) {
                alert('File not downloading, please try again.');
            }
        });

    };

    function click(el) {
        el.disabled = false; // make sure that element is not disabled
        var evt = document.createEvent('Event');
        evt.initEvent('click', true, true);
        el.dispatchEvent(evt);
    }

    function getRandomString() {
        if (window.crypto && window.crypto.getRandomValues && navigator.userAgent.indexOf('Safari') === -1) {
            var a = window.crypto.getRandomValues(new Uint32Array(3)),
                token = '';
            for (var i = 0, l = a.length; i < l; i++) {
                token += a[i].toString(36);
            }
            return token;
        } else {
            return (Math.random() * new Date().getTime()).toString(36).replace(/\./g, '');
        }
    }

    function getFileName(fileExtension) {
        var d = new Date();
        var year = d.getFullYear();
        var month = d.getMonth();
        var date = d.getDate();
        return 'bj-audio-' + year + month + date + '-' + getRandomString() + '.' + fileExtension;
    }

    function SaveToDisk(fileURL, fileName) {
        console.log(fileURL);
        // for non-IE
        if (!window.ActiveXObject) {
            var save = document.createElement('a');
            save.href = fileURL;
            save.download = fileName || 'unknown';
            save.style = 'display:none;opacity:0;color:transparent;';
            (document.body || document.documentElement).appendChild(save);

            if (typeof save.click === 'function') {
                save.click();
            } else {
                save.target = '_blank';
                var event = document.createEvent('Event');
                event.initEvent('click', true, true);
                save.dispatchEvent(event);
            }

            (window.URL || window.webkitURL).revokeObjectURL(save.href);
        }

        // for IE
        else if (!!window.ActiveXObject && document.execCommand) {
            var _window = window.open(fileURL, '_blank');
            _window.document.close();
            _window.document.execCommand('SaveAs', true, fileName || fileURL)
            _window.close();
        }
    }
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-65727978-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-65727978-1');
</script>
	<!-- jQuery -->
	<script src="<?php echo base_url()?>/assets/js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url()?>/assets/js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url()?>/assets/js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url()?>/assets/js/jquery.waypoints.min.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?php echo base_url()?>/assets/js/jquery.stellar.min.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url()?>/assets/js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="<?php echo base_url()?>/assets/js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url()?>/assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url()?>/assets/js/magnific-popup-options.js"></script>
	<!-- Counters -->
	<script src="<?php echo base_url()?>/assets/js/jquery.countTo.js"></script>
	<!-- Main -->
	<script src="<?php echo base_url()?>/assets/js/main.js"></script>

	</body>
</html>