<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @include('cdn')
</head>
<body>
<section class="bg-light py-3 py-md-5">
  <div class="container">
    <div class="row justify-content-md-center">
      <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
        <h2 class="mb-4 display-5 text-center">PASIEN</h2>
        <p class="text-secondary mb-5 text-center">Tambah Data Pasien</p>
        <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row justify-content-lg-center">
      <div class="col-12 col-lg-9">
        <div class="bg-white border rounded shadow-sm overflow-hidden">
          <form action="{{ url('savepasien') }}" method="post" accept-charset="utf-8">
          @csrf
	            <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
              	<div class="col-12">
                	<label for="nama" class="form-label">Nama Pasien <span class="text-danger">*</span></label>
                	<input type="text" class="form-control" id="nama" name="nama">
              	</div>        
		            <div class="col-12 col-md-6">
                	<label for="tgl_lahir" class="form-label">Tanggal Lahir <span class="text-danger">*</span></label>
                	<div class="input-group">
                  		<span class="input-group-text">
                          <svg enable-background="new 0 0 100 100" height="25px" id="Layer_1" version="1.1" viewBox="0 0 100 100" width="25px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><g><g/></g><g/></g></g><g><path d="M20,87h60V37H20V87z M22,75h9v10h-9V75z M55,63v10H45V63H55z M45,61V51h10v10H45z M43,73H33V63h10V73z    M43,75v10H33V75H43z M45,75h10v10H45V75z M57,75h10v10H57V75z M57,73V63h10v10H57z M69,63h9v10h-9V63z M69,61V51h9v10H69z M67,61   H57V51h10V61z M57,49V39h10v10H57z M55,49H45V39h10V49z M43,49H33V39h10V49z M43,51v10H33V51H43z M31,61h-9V51h9V61z M31,63v10h-9   V63H31z M69,85V75h9v10H69z M78,49h-9V39h9V49z M31,39v10h-9V39H31z" fill="#231F20"/><path d="M72,22h-2v-6.5c0-1.104-0.896-2-2-2s-2,0.896-2,2V22H34v-6.5c0-1.104-0.896-2-2-2s-2,0.896-2,2V22h-2   c-4.418,0-8,3.082-8,7.5V34h60v-4.5C80,25.082,76.418,22,72,22z M31.998,31.5c-2.21,0-4-1.79-4-4c0-1.479,0.811-2.754,2.002-3.447   V27.5c0,1.104,0.896,2,2,2s2-0.896,2-2v-3.444c1.189,0.693,1.998,1.968,1.998,3.444C35.998,29.71,34.208,31.5,31.998,31.5z    M67.998,31.5c-2.21,0-4-1.79-4-4c0-1.479,0.811-2.754,2.002-3.447V27.5c0,1.104,0.896,2,2,2s2-0.896,2-2v-3.444   c1.189,0.693,1.998,1.968,1.998,3.444C71.998,29.71,70.208,31.5,67.998,31.5z" fill="#231F20"/><rect fill="#231F20" height="6" width="6" x="35" y="41"/><rect fill="#231F20" height="6" width="6" x="59" y="65"/><rect fill="#231F20" height="6" width="6" x="47" y="65"/></g>
                        </svg>
                      </span>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <label for="phone" class="form-label">Jenis Kelamin</label>
                  <div class="input-group">
                      <span class="input-group-text">
                        <svg height="20" id="svg2793" style="fill-rule:evenodd;clip-rule:evenodd;stroke-linejoin:round;stroke-miterlimit:2;" version="1.1" viewBox="0 0 512 512" width="20" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:cc="http://creativecommons.org/ns#" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:serif="http://www.serif.com/" xmlns:svg="http://www.w3.org/2000/svg"><defs id="defs2797"/><g id="_21-Gender" style="display:inline" transform="translate(5e-5,-4096)"><g id="g2310" transform="translate(200.582,4172.75)"><path d="m 0,358.5 h -41.786 c -8.284,0 -15,6.716 -15,15 v 31.75 H -86.38 V 373.5 c 0,-8.284 -6.716,-15 -15,-15 h -41.787 v -29.59 h 41.787 c 8.284,0 15,-6.716 15,-15 V 158.98 c 0,-6.755 -4.516,-12.677 -11.03,-14.465 -42.122,-11.563 -71.541,-50.174 -71.541,-93.895 0,-53.69 43.68,-97.37 97.368,-97.37 53.688,0 97.367,43.68 97.367,97.37 0,43.721 -29.419,82.332 -71.541,93.895 -6.514,1.788 -11.029,7.71 -11.029,14.465 v 154.93 c 0,8.284 6.716,15 15,15 H 0 Z M 15,298.91 H -26.786 V 169.868 C 22.36,151.399 55.784,103.91 55.784,50.62 c 0,-70.232 -57.137,-127.37 -127.367,-127.37 -70.231,0 -127.368,57.138 -127.368,127.37 0,53.29 33.424,100.779 82.571,119.248 V 298.91 h -41.787 c -8.284,0 -15,6.716 -15,15 v 59.59 c 0,8.284 6.716,15 15,15 h 41.787 v 31.75 c 0,8.284 6.715,15 15,15 h 59.594 c 8.284,0 15,-6.716 15,-15 V 388.5 H 15 c 8.284,0 15,-6.716 15,-15 v -59.59 c 0,-8.284 -6.716,-15 -15,-15" id="path2308" style="fill-rule:nonzero"/></g><g id="g2314" transform="translate(128.999,4188.38)"><path d="M 0,69.98 C -19.295,69.98 -34.993,54.283 -34.993,34.99 -34.993,15.696 -19.295,0 0,0 19.294,0 34.992,15.696 34.992,34.99 34.992,54.283 19.294,69.98 0,69.98 M 64.992,34.99 C 64.992,-0.846 35.836,-30 0,-30 c -35.837,0 -64.993,29.154 -64.993,64.99 0,35.836 29.156,64.99 64.993,64.99 35.836,0 64.992,-29.154 64.992,-64.99" id="path2312" style="fill-rule:nonzero"/></g><g id="g2318" transform="translate(383.002,4445.64)"><path d="m 0,69.99 c -19.295,0 -34.993,-15.701 -34.993,-35 C -34.993,15.697 -19.295,0 0,0 c 19.294,0 34.992,15.697 34.992,34.99 0,19.299 -15.698,35 -34.992,35 M 0,-30 c -35.837,0 -64.993,29.154 -64.993,64.99 0,35.841 29.156,65 64.993,65 35.836,0 64.992,-29.159 64.992,-65 C 64.992,-0.846 35.836,-30 0,-30" id="path2316" style="fill-rule:nonzero"/></g><g id="g2322" transform="translate(383.002,4129.26)"><path d="m 0,448.74 c -53.689,0 -97.368,-43.68 -97.368,-97.37 0,-43.72 29.419,-82.332 71.541,-93.895 6.515,-1.788 11.03,-7.71 11.03,-14.465 V 86.74 c 0,-6.066 -3.654,-11.535 -9.258,-13.857 -1.857,-0.77 -3.806,-1.143 -5.739,-1.143 -3.902,0 -7.738,1.523 -10.607,4.391 l -13.201,13.193 c -2.791,2.791 -6.506,4.329 -10.462,4.329 -3.956,0 -7.671,-1.538 -10.462,-4.329 -5.769,-5.77 -5.769,-15.158 -0.001,-20.927 L -10.462,4.335 C -7.667,1.54 -3.952,0 0,0 3.951,0 7.666,1.54 10.462,4.337 l 64.063,64.059 c 5.769,5.77 5.769,15.158 0,20.928 -2.791,2.791 -6.506,4.329 -10.462,4.329 -3.956,0 -7.672,-1.538 -10.466,-4.332 L 40.401,76.131 c -4.29,-4.287 -10.741,-5.57 -16.346,-3.248 -5.604,2.321 -9.258,7.791 -9.258,13.857 v 156.27 c 0,6.755 4.515,12.677 11.029,14.465 42.122,11.563 71.541,50.175 71.541,93.895 0,53.69 -43.679,97.37 -97.367,97.37 M 44.797,232.122 V 119.327 c 5.94,2.832 12.488,4.326 19.266,4.326 11.97,0 23.22,-4.659 31.677,-13.117 C 113.203,93.07 113.203,64.651 95.739,47.183 L 31.678,-16.874 C 23.217,-25.338 11.967,-30 0,-30 c -11.967,0 -23.218,4.661 -31.677,13.123 L -95.74,47.184 c -17.465,17.466 -17.465,45.886 -0.001,63.351 8.457,8.459 19.707,13.118 31.677,13.118 6.779,0 13.327,-1.494 19.267,-4.326 v 112.795 c -49.147,18.469 -82.571,65.958 -82.571,119.248 0,70.232 57.137,127.37 127.368,127.37 70.23,0 127.367,-57.138 127.367,-127.37 0,-53.29 -33.424,-100.779 -82.57,-119.248" id="path2320" style="fill-rule:nonzero"/></g></g>
                        </svg>
                      </span>
                        <input type="text" class="form-control" id="jk" name="jk">
                  </div>
                </div>
                <div class="col-12">
                	<label for="nama" class="form-label">No. Rekam Medis <span class="text-danger">*</span></label>
                	<input type="text" class="form-control" id="no_rm" name="no_rm">
              	</div>  
                <div class="col-12">
                	<label for="nama" class="form-label">Riwayat Penyakit <span class="text-danger">*</span></label>
                	<input type="text" class="form-control" id="rp" name="rp">
              	</div> 
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary btn-lg" type="submit" name="btn_simpan" value="simpan">Submit</button>
                  </div>
                </div>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
</html>