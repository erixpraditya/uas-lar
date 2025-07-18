@extends('layouts.template')

@section('title')
    Dashboard
@endsection

@section('content')
        <div class="col-12 ">
              <div class="card mt-5">
                <div class="card-body">
                  <div class="d-md-flex align-items-center">
                    <div>
                      <h4 class="card-title">Update Peminjam Melewati Batas</h4>
                    </div>
                    <div class="ms-auto mt-3 mt-md-0">
                      <select class="form-select theme-select border-0" aria-label="Default select example">
                        <option value="1">July 2025</option>
                        <option value="2">Juni 2025</option>
                        <option value="3">Mei 2025</option>
                      </select>
                    </div>
                  </div>
                  <div class="table-responsive mt-4">
                    <table class="table mb-0 text-nowrap varient-table align-middle fs-3">
                      <thead>
                        <tr>
                          <th scope="col" class="px-0 text-muted">
                            Nama Lengkap
                          </th>
                          <th scope="col" class="px-0 text-muted">Buku</th>
                          <th scope="col" class="px-0 text-muted">
                            Status
                          </th>
                          <th scope="col" class="px-0 text-muted text-end">
                            Denda
                          </th>
                          <th scope="col" class="px-0 text-muted text-end">
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="px-0">
                            <div class="d-flex align-items-center">
                              <img src="./assets/images/profile/user-3.jpg" class="rounded-circle" width="40"
                                alt="flexy" />
                              <div class="ms-3">
                                <h6 class="mb-0 fw-bolder">Praditya Erix</h6>
                              </div>
                            </div>
                          </td>
                          <td class="px-0">Atomic Habits</td>
                          <td class="px-0">
                            <span class="badge bg-danger">2 Hari</span>
                          </td>
                          <td class="px-0 text-dark fw-medium text-end">
                            Rp 2.000
                          </td>
                          <td class="px-0 text-end">
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                        </tr>
                        <tr>
                          <td class="px-0">
                            <div class="d-flex align-items-center">
                              <img src="./assets/images/profile/user-5.jpg" class="rounded-circle" width="40"
                                alt="flexy" />
                              <div class="ms-3">
                                <h6 class="mb-0 fw-bolder">
                                  Erix Praditya
                                </h6>
                              </div>
                            </div>
                          </td>
                          <td class="px-0">3675Mdpl</td>
                          <td class="px-0">
                            <span class="badge text-bg-danger">5 Hari</span>
                          </td>
                          <td class="px-0 text-dark fw-medium text-end">
                            Rp 5.000
                          </td>
                          <td class="px-0 text-end">
                            <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="row" style="min-height: 100%;">
  <!-- Statistik Mingguan -->
            <div class="col-lg-6">
                <div class="card h-100">
                <div class="card-body pb-0 d-flex flex-column">
                    <div class="d-flex align-items-start">
                        <div>
                            <h4 class="card-title">Statistik Mingguan</h4>
                        </div>
                    <div class="ms-auto">
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="text-muted" id="year1-dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="ti ti-dots fs-7"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="year1-dropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </div>
                    </div>
                    </div>

                    <div class="mt-4 pb-3 d-flex align-items-center">
                        <span class="btn btn-primary rounded-circle round-48 hstack justify-content-center">
                            <i class="fa-solid fa-book"></i>
                        </span>
                    <div class="ms-3">
                        <h5 class="mb-0 fw-bolder fs-4">Penambahan Buku</h5>
                    </div>
                    <div class="ms-auto">
                        <span class="badge bg-secondary-subtle text-muted">+68%</span>
                    </div>
                    </div>

                    <div class="py-3 d-flex align-items-center">
                        <span class="btn btn-warning rounded-circle round-48 hstack justify-content-center">
                            <i class="fa-solid fa-users"></i>
                        </span>
                    <div class="ms-3">
                        <h5 class="mb-0 fw-bolder fs-4">Penambahan Anggota</h5>
                    </div>
                    <div class="ms-auto">
                        <span class="badge bg-secondary-subtle text-muted">+68%</span>
                    </div>
                    </div>

                    <div class="py-3 d-flex align-items-center">
                        <span class="btn btn-success rounded-circle round-48 hstack justify-content-center">
                            <i class="fa-solid fa-arrows-rotate"></i>
                        </span>
                    <div class="ms-3">
                        <h5 class="mb-0 fw-bolder fs-4">Penambahan Peminjam</h5>
                    </div>
                    <div class="ms-auto">
                        <span class="badge bg-secondary-subtle text-muted">+68%</span>
                    </div>
                    </div>
                    <div class="py-3 d-flex align-items-center">
                        <span class="btn btn-danger rounded-circle round-48 d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-money-bill-wave"></i>
                        </span>
                        <div class="ms-3">
                            <h5 class="mb-0 fw-bolder fs-4">Penambahan Denda</h5>
                        </div>
                        <div class="ms-auto">
                            <span class="badge bg-secondary-subtle text-muted">+15%</span>
                        </div>
                    </div>
                </div>
                </div>
            </div>

            <!-- Recent Comments -->
            <div class="col-lg-6">
                <div class="card h-100">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title mb-3">Anggota Baru Yang Belum di Tambahkan</h4>
                    <div class="comment-widgets scrollable common-widget flex-grow-1" style="overflow-y: auto;" data-simplebar="">
                    <!-- Ulangi blok ini sesuai jumlah komentar -->
                    <div class="d-flex flex-row comment-row border-bottom p-3 gap-3">
                        <div>
                            <img src="./assets/images/profile/user-3.jpg" class="rounded-circle" alt="user" width="50" />
                        </div>
                        <div class="comment-text w-100">
                            <h6 class="fw-medium">Hanif</h6>
                            <p class="mb-1 fs-2 text-muted">Mendaftar 1 Hari Yang Lalu</p>
                        <div class="comment-footer mt-2">
                            <div class="d-flex align-items-center justify-content-between">
                                <span class="badge bg-info-subtle text-info">Pending</span>
                                <span class="text-muted fw-normal fs-2">July 17, 2025</span>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row comment-row border-bottom p-3 gap-3">
                        <div>
                            <img src="./assets/images/profile/user-5.jpg" class="rounded-circle" alt="user" width="50" />
                        </div>
                        <div class="comment-text w-100">
                                <h6 class="fw-medium">Herdio</h6>
                                <p class="mb-1 fs-2 text-muted">Mendaftar 5 Menit Yang Lalu</p>
                            <div class="comment-footer mt-2">
                                <div class="d-flex align-items-center justify-content-between">
                                    <span class="badge bg-info-subtle text-info">Pending</span>
                                    <span class="text-muted fw-normal fs-2">July 18, 2025</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END KOMENTAR -->
                    </div>
                </div>
                </div>
            </div>
            </div>


@endsection
