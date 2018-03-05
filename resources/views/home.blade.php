@extends('layouts.app')

@section('content')
  <div class="container">
          {{-- @foreach ($products->chunk(3) as $items) --}}
              <div class="row">
                  {{-- @foreach ($items as $product) --}}
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img
                            class="card-img-top"
                            alt="Product image"
                            style="width: 100%; display: block;"
                            src=" " >

                        <div class="card-body">
                            <h5>Product One</h5>
                            <p class="card-text">
                                Awesome product.Awesome product.Awesome product.Blah blah
                            </p>

                            <div class="d-flex justify-content-between align-items-center">
                                <small>&#8377; 50</small>

                                <div class="">
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-secondary"
                                        data-toggle="modal"
                                        data-target="#modal-">
                                        Quick look
                                    </button>

                                    <a
                                        href=""
                                        class="btn btn-sm btn-primary ml-1">
                                        Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img
                            class="card-img-top"
                            alt="Product image"
                            style="width: 100%; display: block;"
                            src=" " >

                        <div class="card-body">
                            <h5>Product One</h5>
                            <p class="card-text">
                                Awesome product.Awesome product.Awesome product.Blah blah
                            </p>

                            <div class="d-flex justify-content-between align-items-center">
                                <small>&#8377; 50</small>

                                <div class="">
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-secondary"
                                        data-toggle="modal"
                                        data-target="#modal-">
                                        Quick look
                                    </button>

                                    <a
                                        href=""
                                        class="btn btn-sm btn-primary ml-1">
                                        Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img
                            class="card-img-top"
                            alt="Product image"
                            style="width: 100%; display: block;"
                            src=" " >

                        <div class="card-body">
                            <h5>Product One</h5>
                            <p class="card-text">
                                Awesome product.Awesome product.Awesome product.Blah blah
                            </p>

                            <div class="d-flex justify-content-between align-items-center">
                                <small>&#8377; 50</small>

                                <div class="">
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-secondary"
                                        data-toggle="modal"
                                        data-target="#modal-">
                                        Quick look
                                    </button>

                                    <a
                                        href=""
                                        class="btn btn-sm btn-primary ml-1">
                                        Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  {{-- @endforeach --}}
              </div>


              <div class="row">
                  {{-- @foreach ($items as $product) --}}
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img
                            class="card-img-top"
                            alt="Product image"
                            style="width: 100%; display: block;"
                            src=" " >

                        <div class="card-body">
                            <h5>Product One</h5>
                            <p class="card-text">
                                Awesome product.Awesome product.Awesome product.Blah blah
                            </p>

                            <div class="d-flex justify-content-between align-items-center">
                                <small>&#8377; 50</small>

                                <div class="">
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-secondary"
                                        data-toggle="modal"
                                        data-target="#modal-">
                                        Quick look
                                    </button>

                                    <a
                                        href=""
                                        class="btn btn-sm btn-primary ml-1">
                                        Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img
                            class="card-img-top"
                            alt="Product image"
                            style="width: 100%; display: block;"
                            src=" " >

                        <div class="card-body">
                            <h5>Product One</h5>
                            <p class="card-text">
                                Awesome product.Awesome product.Awesome product.Blah blah
                            </p>

                            <div class="d-flex justify-content-between align-items-center">
                                <small>&#8377; 50</small>

                                <div class="">
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-secondary"
                                        data-toggle="modal"
                                        data-target="#modal-">
                                        Quick look
                                    </button>

                                    <a
                                        href=""
                                        class="btn btn-sm btn-primary ml-1">
                                        Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img
                            class="card-img-top"
                            alt="Product image"
                            style="width: 100%; display: block;"
                            src=" " >

                        <div class="card-body">
                            <h5>Product One</h5>
                            <p class="card-text">
                                Awesome product.Awesome product.Awesome product.Blah blah
                            </p>

                            <div class="d-flex justify-content-between align-items-center">
                                <small>&#8377; 50</small>

                                <div class="">
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-secondary"
                                        data-toggle="modal"
                                        data-target="#modal-">
                                        Quick look
                                    </button>

                                    <a
                                        href=""
                                        class="btn btn-sm btn-primary ml-1">
                                        Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  {{-- @endforeach --}}
              </div>


              <div class="row">
                  {{-- @foreach ($items as $product) --}}
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img
                            class="card-img-top"
                            alt="Product image"
                            style="width: 100%; display: block;"
                            src=" " >

                        <div class="card-body">
                            <h5>Product One</h5>
                            <p class="card-text">
                                Awesome product.Awesome product.Awesome product.Blah blah
                            </p>

                            <div class="d-flex justify-content-between align-items-center">
                                <small>&#8377; 50</small>

                                <div class="">
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-secondary"
                                        data-toggle="modal"
                                        data-target="#modal-">
                                        Quick look
                                    </button>

                                    <a
                                        href=""
                                        class="btn btn-sm btn-primary ml-1">
                                        Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img
                            class="card-img-top"
                            alt="Product image"
                            style="width: 100%; display: block;"
                            src=" " >

                        <div class="card-body">
                            <h5>Product One</h5>
                            <p class="card-text">
                                Awesome product.Awesome product.Awesome product.Blah blah
                            </p>

                            <div class="d-flex justify-content-between align-items-center">
                                <small>&#8377; 50</small>

                                <div class="">
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-secondary"
                                        data-toggle="modal"
                                        data-target="#modal-">
                                        Quick look
                                    </button>

                                    <a
                                        href=""
                                        class="btn btn-sm btn-primary ml-1">
                                        Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img
                            class="card-img-top"
                            alt="Product image"
                            style="width: 100%; display: block;"
                            src=" " >

                        <div class="card-body">
                            <h5>Product One</h5>
                            <p class="card-text">
                                Awesome product.Awesome product.Awesome product.Blah blah
                            </p>

                            <div class="d-flex justify-content-between align-items-center">
                                <small>&#8377; 50</small>

                                <div class="">
                                    <button
                                        type="button"
                                        class="btn btn-sm btn-outline-secondary"
                                        data-toggle="modal"
                                        data-target="#modal-">
                                        Quick look
                                    </button>

                                    <a
                                        href=""
                                        class="btn btn-sm btn-primary ml-1">
                                        Buy
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
                  {{-- @endforeach --}}
              </div>
          {{-- @endforeach --}}
      </div>
@endsection
