@extends('layouts.app')
@section('title', 'Halaman Home')
@section('content')
<section class="contact" id="contact">
    <div class="container">
        <div class="row pt-5 mb-4" style="margin-top: 10px;">
            <div class="col text-center">
                <h2>Contact</h2>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card bg-dark text-white mb-4 text-center">
                    <div class="card-body">
                        <h5 class="card-title"></h5>
                        <p class="card-text">Ini adalah bagian untuk mengontak Admin.<br> 
                        Jika readers mempunya masukkan silahkan isi form berikut.</p>
                    </div>
                </div>

                <ul class="list-group mb-4">
                    <li class="list-group-item "><h3>Social Media</h3></li>
                    <li class="list-group-item fa fa-instagram"> @mochrestu3</li>
                </ul>
            </div>

        <div class="col-lg-6">
            <form>
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <button type="button" class="btn btn-dark btn-round">Send Message</button>
                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#myModal">Merchandise</button>
                    <x-modal>
                        halo
                    </x-modal>
                </div>
            </form>
        </div>
        </div>
    </div>
</section>
@endsection
