@extends('layouts.master')
@section('content')
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--Custom Style -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    
    <title>Inventory...</title>
  </head>
  <body>
      
    <div id="paper" class="page p-5 d-flex flex-column align-content-center">
        
            <section class="top-content bb d-flex justify-content-between">
                <div class="logo"><img src="image/pup.png" alt="" class="img-fluid">
                    
                </div>
                <div class="top-left text-center">
                    <div class="graphic-path ">
                        <p style="font-size: 1.2rem">Inventory Report</p>
                    </div>
                    <div class="position-relative">
                        <p>Inventory Report No. <span>XXXX</span></p>
                    </div>
                </div>
            </section>

            <section class="store-user mt-2">
                <div class="col-10">
                    <div class="row bb pb-3">
                            <p>Republic of the Philippines</p>
                            <p>POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</p>
                            <p>OFFICE OF THE VICE PRESIDENT FOR BRANCHES AND CAMPUSES</p>
                            <p>CALAUAN CAMPUS LAGUNA</p>
                    </div>
                </div>
                <div class="row extra-info pt-3">
                    <div class="col-7">
                        <p>Brgy. Kanluran Calauan,Laguna </p>
                        
                    </div>
                    <div class="col-5">
                        <p>Date: <span>Feb.1,2021</span></p>
                    </div>
                </div>
            </section>

            <section class="product-area mt-4">
                <table class="table table hover">
                    <thead>
                        <tr>
                            <td>Description</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><div class="media">
                                
                                <div class="media-body">
                                  <p class="mt-0 title">Total No. of Books</p>
                                   
                                </div>
                              </div></td>
                            <td>{{ $total }}</td>
                        </tr>
                        <tr>
                            <td><div class="media">
                                
                                <div class="media-body">
                                  <p class="mt-0 title">No. of Books from Old Library</p>
                                </div>
                              </div></td>
                            <td>{{ $old }}</td>
                        </tr>
                        <tr>
                            <td><div class="media">
                                
                                <div class="media-body">
                                  <p class="mt-0 title">No. of Books from PUP Main</p>
                                   
                                </div>
                              </div></td>
                            <td>{{ $main }}</td>
                        </tr>
                        <tr>
                            <td><div class="media">
                                
                                <div class="media-body">
                                  <p class="mt-0 title">No. of Books (Faculty)</p>
                                   
                                </div>
                              </div></td>
                            <td>{{ $faculty }}</td>
                        </tr>
                        <tr>
                            <td><div class="media">
                                
                                <div class="media-body">
                                  <p class="mt-0 title">No. of Books(Combined)</p>
                                   
                                </div>
                              </div></td>
                            <td>{{ $combined }}</td>
                        </tr>
                        <tr>
                            <td><div class="media">
                                
                                <div class="media-body">
                                  <p class="mt-0 title">No. of Books (Book-Alpha)</p>
                                   
                                </div>
                              </div></td>
                            <td>{{ $book_alpha }}</td>
                        </tr>
                        <tr>
                            <td><div class="media">
                                <div class="media-body">
                                  <p class="mt-0 title">Total No. of Research Papers</p>
                                  . 
                                </div>
                              </div></td>
                            <td>100</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <section class="mt-5 balance-info">
                <div class="row">
                    <div class="col-8">
                        <p class="m-0 font-weight-bold">Note:</p>
                        <p>This Report has been issued for whatever legal purpose it may serve.</p>
                    </div>
                    <div class="col-4">
                        <div class="col-12">
                            <img src="image/signature.png" class="img-fluid" alt="">
                            
                            <p><center><u>Lou Anne M. Pronto</u></center></p>
                            <p><center>Property Custodian</center></p>
                        </div>
                    </div>
                </div>
            </section>

            <footer class="d-flex flex-column justify-content-end mt-5">
                <hr>
                <p class="m-0 text-center">This Inventory Report is exclusively just for PUP Calauan Campus Library</p>
                <div class="social pt-3">
                    <span class="pr-2">
                        <i class="fas fa-mobile"></i>
                        <span>09362138094</span>
                    </span>
                    <span class="pr-2">
                        <i class="fas fa-envelope-square"></i>
                        <span>facebook@ pupcc</span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-facebook"></i>
                        <span>facebook@ pupcc</span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-twitter"></i>
                        <span>twitter@ pupcc</span>
                    </span>
                    <span class="pr-2">
                        <i class="fab fa-instagram"></i>
                        <span>ig@ pupcc</span>
                    </span>
                    
                </div>
            </footer>
    </div>

    <div class="button">
        <button class="btn btn-success" id="download"><i class="fas fa-file-download mr-2"></i>Download</button>
    <script>


var downloadBtn = document.getElementById("download");

downloadBtn.addEventListener("click", function(){

var pdfContents = document.getElementById('paper').innerHTML;
var opt = {
    margin:       1,
    filename:     'inventory_report.pdf',
    image:        { type: 'jpeg', quality: 0.98 },
    html2canvas:  { scale: 2 },
    jsPDF:        { unit: 'cm', format: 'a4', orientation: 'portrait' },
    pagebreak: { mode: ['avoid-all', 'css', 'legacy'] }
};

html2pdf().from(pdfContents).set(opt).save();

});
    </script>
  </body>
</html>

@endsection