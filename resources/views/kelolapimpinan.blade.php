<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kelola Tim Akreditasi - Modul Akreditasi</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ url('css/akreditasi.css') }}" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
      href="https://fonts.googleapis.com/css?family=Montserrat">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <div class="navbar-wrapper">
    <div class="container-fluid">
        <nav class="navbar navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img class="img-responsive" id="logonav" src="{{ url('images/logo.png') }}" alt="" >
                    </a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('home') }}" class="">Home</a></li>
                        
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Borang Standar <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Standar 2</a></li>
                                <li><a href="#">Standar 4</a></li>
                                <li><a href="#">Standar 7</a></li>
                            </ul>
                        </li>

                        <li><a href="#">Riwayat Akreditasi</a></li>
                        
                        @if ($role!='Tim Akreditasi' && $role!='Admin')
                        <li class="dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kelola Tim Akreditasi <span class="caret"></span></a>
                           <ul class="dropdown-menu">
                                <li><a href="{{ url('/timakreditasi/tambah/'.$kode_fakultas) }}">Tambah Pengguna</a></li>
                                <li><a href="{{ url('/timakreditasi/kelola/'.$kode_fakultas) }}">Lihat dan Hapus Pengguna</a></li>
    
                            </ul>
                        </li>
                        @endif

                        @if ($role=='Admin')
                        <li><a href="#">Kelola Pimpinan</a></li>
                        @endif

                       
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li class=" dropdown"><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Signed in as  {{$role}}<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                
                                <li><a href="{{ url('profil/'.$user) }}">My Profile</a></li>
                            </ul>
                        </li>
                        <li class=""><a href="{{ url('logout') }}">Logout</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>


    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <div  class="col-md-8 col-md-offset-2" id="kontenkelola">

                <div id="titlekelola"> 
                     <h2>Kelola Pimpinan</h2>
                     
                     <br>
                     <br>
                     <br>
                </div>

                 <div class="col-md-12 col-md-offset-3">
                    <form action="{username}" method="POST" id="form-cari">
               
                      <div class="input-group">
                         <input class="btn btn-md inputform" name="username" id="username" type="username" placeholder="Username" >
                        
	       				 <select class="form-control" id="sel1">
					        <option>Pimpinan Universitas</option>
					        <option>Pimpinan Fakultas</option>
					        <option>BPMA</option>
	      				</select>

	      				<button type="button" class="btn btn-primary"> Simpan</button>
	      				<button type="button" class="btn btn-primary">Batal</button>
	                    
                      </div>


                    </form>
                 </div>
               

                <br>

              
                <br>
                <br>

            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- Modal -->
  <div class="modal fade" id="confirmationModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Hapus Tim Akreditasi</h4>
        </div>
        <div class="modal-body">
          <p id='isi'>isinya</p>
        </div>
        <div class="modal-footer">
          <a href="#" id="link" ><button type="button" class="btn btn-default">Yakin</button></a>
         <button type="button" class="btn btn-default" data-dismiss="modal">batal</button>
        </div>
      </div>
      
    </div>
  </div>

<footer>
  <div class="footer navbar-fixed-bottom">
    <p id="footerbawah">Copyright © 2017 Propensi A08. All Rights Reserved</p>
  </div>
</footer>



    <!-- jQuery -->
    <script src="{{ url('js/jquery.js') }}"></script>


    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('js/bootstrap.min.js') }}">
    </script>

    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"> </script>

    <script>
      $(document).ready(function() {
        $('#example').DataTable();
    } );
    </script>

    <!-- script untuk navigation -->
    <script> 
            $(function(){
            $('.button-checkbox').each(function(){
                var $widget = $(this),
                    $button = $widget.find('button'),
                    $checkbox = $widget.find('input:checkbox'),
                    color = $button.data('color'),
                    settings = {
                            on: {
                                icon: 'glyphicon glyphicon-check'
                            },
                            off: {
                                icon: 'glyphicon glyphicon-unchecked'
                            }
                    };

                $button.on('click', function () {
                    $checkbox.prop('checked', !$checkbox.is(':checked'));
                    $checkbox.triggerHandler('change');
                    updateDisplay();
                });

                $checkbox.on('change', function () {
                    updateDisplay();
                });

                function updateDisplay() {
                    var isChecked = $checkbox.is(':checked');
                    // Set the button's state
                    $button.data('state', (isChecked) ? "on" : "off");

                    // Set the button's icon
                    $button.find('.state-icon')
                        .removeClass()
                        .addClass('state-icon ' + settings[$button.data('state')].icon);

                    // Update the button's color
                    if (isChecked) {
                        $button
                            .removeClass('btn-default')
                            .addClass('btn-' + color + ' active');
                    } 
                    else 
                    { 
                        $button
                            .removeClass('btn-' + color + ' active')
                            .addClass('btn-default');
                    }
                }
                function init() {
                    updateDisplay();
                    // Inject the icon if applicable
                    if ($button.find('.state-icon').length == 0) {
                        $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i> ');
                    }
                }
                init();
            });
        });

            $('#confirmationModal').on('show.bs.modal', function(e) {
          var username = e.relatedTarget.dataset.username;
          document.getElementById("isi").innerHTML="Anda yakin ingin menghapus "+username+ " dari tim akreditasi?";
          var link = document.getElementById("link");
          var linkHapus = "hapus/"+username;
        link.setAttribute("href", linkHapus);
      });
    </script>

</body>

</html>