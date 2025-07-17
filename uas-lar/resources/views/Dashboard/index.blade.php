@extends('layouts.template')

@section('title')
    Dashboard
@endsection

@section('content')
        <div class="col-12">
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
@endsection
