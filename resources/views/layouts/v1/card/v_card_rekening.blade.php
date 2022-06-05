<div class="modal fade bd-rekening-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Rekening Donasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>
        <div class="card text-center">
            <div class="card-body">
                <p class="card-text mb-3">Kami ucapkan terimakasih atas dukungan serta partisipasinya</p>
                <ul>
                    <li>A/N : Slamet Aldiansyah <p style="color: blue;font-size:24px;"><b>BCA</b></p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control text-center" id="ATM-BCA" readonly value="6240944179">
                            <div class="input-group-append">
                              <button class="btn btn-sm btn-outline-secondary" type="button" data-ATM="ATM-BCA" onclick="copyATM()"><i class="fas fa-copy"></i></button>
                            </div>
                          </div>
                          <hr>
                    </li>
                    <li>A/N : Deby Noviralita <p style="color: green;font-size:24px;"><b>Muamalat</b></p>
                        <div class="input-group mb-3">
                            <input type="text" class="form-control text-center" id="ATM-Muamalat" readonly value="3290025326">
                            <div class="input-group-append">
                              <button class="btn btn-sm btn-outline-secondary" type="button" data-ATM="ATM-Muamalat" onclick="copyATM()"><i class="fas fa-copy"></i></button>
                            </div>
                          </div>
                          <hr>
                    </li>
                </ul>
                <h5 class="card-title mt-3">Terimakasih</h5>
            </div>
            <div class="card-footer">
               Regards <br>
               <a href="https://www.linkedin.com/in/slamet-aldiansyah/">Slamet Aldiansyah S.Kom</a>
            </div>
          </div>
      </div>
    </div>
  </div>

  <div class="modal fade bd-alertdialog-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background-color: #21252987">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle" style="color: white">Welcome</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="d-flex justify-content-center">
                  <button type="button" class="btn btn-sm btn-outline-secondary mr-3" data-dismiss="modal" style="color: white">Next</button>
                  <button type="button" class="btn btn-sm btn-card-donation" data-dismiss="modal" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target=".bd-rekening-modal-sm"> <i class="fas fa-credit-card"></i></i> Gift Or Donation</button>
              </div>
          </div>
          {{-- <div class="modal-footer">

          </div> --}}
        </div>
      </div>
  </div>

