        

        <div id="accordion" role="tablist">
                    <div class="card" style="">{{-- card kesehatan --}}
                      <div class="card-header text-white bg-success" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="{!! url('/kategori-pakaianpria'); !!}" class="float-left text-white">Kesehatan</a>
                              <a data-toggle="collapse" href="#subkategorikesehatan" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorikesehatan" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Tradisional</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#tradisional" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="tradisional" class="collapse">
                              @foreach ($tradisional as $initradisional)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $initradisional->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Modern</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#modern" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="modern" class="collapse">
                              @foreach ($modern as $inimodern)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimodern->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                      </div>
                    </div>  {{-- card kesehatan --}}



                    <div class="card" style="">{{-- card kecantikan --}}
                      <div class="card-header text-white bg-success" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="{!! url('/kategori-pakaianpria'); !!}" class="float-left text-white">Kecantikan</a>
                              <a data-toggle="collapse" href="#subkategorikecantikan" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorikecantikan" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Salon</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#salon" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="salon" class="collapse">
                              @foreach ($salon as $inisalon)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inisalon->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Tata Rias</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#tatarias" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="tatarias" class="collapse">
                              @foreach ($tatarias as $initatarias)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $initatarias->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Pangkas Rambut</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#pangkasrambut" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="pangkasrambut" class="collapse">
                              @foreach ($pangkasrambut as $inipangkas)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inipangkas->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">BarberShop</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#barbershop" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="barbershop" class="collapse">
                              @foreach ($barbershop as $inibarber)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inibarber->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                      </div>
                    </div>  {{-- card kecantikan --}}


                    <div class="card" style="">{{-- card reparasi --}}
                      <div class="card-header text-white bg-success" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="{!! url('/kategori-pakaianpria'); !!}" class="float-left text-white">Reparasi</a>
                              <a data-toggle="collapse" href="#subkategorireparasi" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorireparasi" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Rumah</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#rumah" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="rumah" class="collapse">
                              @foreach ($rumah as $inirumah)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inirumah->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Mobil</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#mobil" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="mobil" class="collapse">
                              @foreach ($mobil as $inimobil)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimobil->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Motor</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#motor" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="motor" class="collapse">
                              @foreach ($motor as $inimotor)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimotor->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Listrik</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#listrik" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="listrik" class="collapse">
                              @foreach ($listrik as $inilistrik)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inilistrik->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Tambal Ban</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#tambalban" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="tambalban" class="collapse">
                              @foreach ($tambalban as $initambalban)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $initambalban->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Las</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#las" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="las" class="collapse">
                              @foreach ($las as $inilas)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inilas->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Elektronik</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#elektronik" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="elektronik" class="collapse">
                              @foreach ($elektronik as $inielektronik)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inielektronik->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Handphone</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#handphone" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="handphone" class="collapse">
                              @foreach ($handphone as $inihandphone)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inihandphone->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                      </div>
                    </div>  {{-- card reparasi --}}


                     <div class="card" style="">{{-- card Kebersihan --}}
                      <div class="card-header text-white bg-success" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="{!! url('/kategori-pakaianpria'); !!}" class="float-left text-white">Kebersihan</a>
                              <a data-toggle="collapse" href="#subkategorikebersihan" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorikebersihan" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Dalam Rumah</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#dalamrumah" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="dalamrumah" class="collapse">
                              @foreach ($dalamrumah as $inidalamrumah)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inidalamrumah->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Luar Rumah</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#luarrumah" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="luarrumah" class="collapse">
                              @foreach ($luarrumah as $iniluar)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniluar->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Cuci Kendaraan</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#cucikendaraan" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="cucikendaraan" class="collapse">
                              @foreach ($cucikendaraan as $iniluar)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniluar->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                      </div>
                    </div>  {{-- card Kebersihan --}}


                     <div class="card" style="">{{-- card tenaga pendukung--}}
                      <div class="card-header text-white bg-success" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="{!! url('/kategori-pakaianpria'); !!}" class="float-left text-white">Tenaga Pendukung</a>
                              <a data-toggle="collapse" href="#subkategoritenaga" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategoritenaga" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Asisten Rumah Tangga</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#asisten" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="asisten" class="collapse">
                              @foreach ($asisten as $iniasisten)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniasisten->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Baby Sister</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#babysister" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="babysister" class="collapse">
                              @foreach ($babysister as $inibabysister)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inibabysister->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Satpam</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#satpam" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="satpam" class="collapse">
                              @foreach ($satpam as $inisatpam)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inisatpam->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Driver</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#driver" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="driver" class="collapse">
                              @foreach ($driver as $inisatpam)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inisatpam->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Tukang Masak</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#tukangmasak" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="tukangmasak" class="collapse">
                              @foreach ($tukangmasak as $initukangmasak)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $initukangmasak->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                      </div>
                    </div>  {{-- card tenaga pendukung --}}


                    <div class="card" style="">{{-- card kursus--}}
                      <div class="card-header text-white bg-success" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="{!! url('/kategori-pakaianpria'); !!}" class="float-left text-white">Kursus</a>
                              <a data-toggle="collapse" href="#subkategorikursus" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategorikursus" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Menjahit</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#menjahit" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="menjahit" class="collapse">
                              @foreach ($menjahit as $inimenjahit)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimenjahit->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Musik</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#musik" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="musik" class="collapse">
                              @foreach ($musik as $inimusik)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimusik->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Memasak</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#memasak" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="memasak" class="collapse">
                              @foreach ($memasak as $inimemasak)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimemasak->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Beladiri</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#beladiri" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="beladiri" class="collapse">
                              @foreach ($beladiri as $inibeladiri)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inibeladiri->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Program Komputer</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#programkomputer" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="programkomputer" class="collapse">
                              @foreach ($programkomputer as $iniprogramkomputer)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniprogramkomputer->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Menari</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#menari" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="menari" class="collapse">
                              @foreach ($menari as $inimenari)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inimenari->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Otomotif</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#otomotif" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="otomotif" class="collapse">
                              @foreach ($otomotif as $iniotomotif)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniotomotif->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Bimbingan Belajar</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#bimbel" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="bimbel" class="collapse">
                              @foreach ($bimbel as $inibimbel)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inibimbel->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                      </div>
                    </div>  {{-- card kursus--}}


                    <div class="card" style="">{{-- card jasa tour--}}
                      <div class="card-header text-white bg-success" role="tab" id="headingOne">
                        <div class="clearfix">
                            <h5 class="mb-0">
                              <a href="{!! url('/kategori-pakaianpria'); !!}" class="float-left text-white">Jasa Tour & Travel</a>
                              <a data-toggle="collapse" href="#subkategoritravel" aria-expanded="true" aria-controls="collapseOne" class="float-right text-white">
                               <i class="fa fa-chevron-down"></i>
                              </a>
                            </h5>
                        </div>
                      </div>

                      <div id="subkategoritravel" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">

                         <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Dalam Negeri</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#dalamnegeri" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="dalamnegeri" class="collapse">
                              @foreach ($dalamnegeri as $inidalamnegeri)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $inidalamnegeri->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>


                        <div class="card">
                          <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">Luar Negeri</a>
                                  </h5>
                                  <a data-toggle="collapse" href="#luarnegeri" aria-expanded="true" aria-controls="collapseOne" class="float-right">
                                    <i class="fa fa-chevron-down"></i>
                                  </a>
                                </div>
                          </div>
                          <div id="luarnegeri" class="collapse">
                              @foreach ($luarnegeri as $iniluarnegeri)
                              <div class="card-header">
                                <div class="clearfix">
                                  <h5 class="mb-0">
                                    <a href="#" class="float-left">{{ $iniluarnegeri->kategori2 }}</a>
                                  </h5>
                                </div>
                              </div>
                              @endforeach
                          </div>
                        </div>

                      </div>
                    </div>  {{-- card jasa tour --}}


                  



              </div> {{--  div id accordion --}}
