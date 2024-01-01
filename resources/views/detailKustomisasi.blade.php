@extends('layouts.adminLayout')

@section('content')
<div class="container-fluid">
    <div class="row">
        @include('layouts.sidebarAdmin')
        <main class="main-content min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            <div class="w-full max-w-screen-xl mx-auto px-6 py-4 bg-white shadow-md sm:rounded-lg">

                <form method="POST" action="{{ route('updateKustomisasi') }}">
                    @csrf

                    <div class="mt-4">
                        <x-input-label for="idKustomisasi" :value="__('ID Kustomisasi')" />
                        <x-text-input id="idKustomisasi" class="block mt-1 w-full" type="text" name="idKustomisasi"
                            :value="$detailKustomisasi -> id" readonly />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="name" :value="__('Nama')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                            :value="$detailKustomisasi -> name" readonly />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="description" :value="__('Description')" />
                        <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                            :value="$detailKustomisasi -> description" readonly />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="namaPengaju" :value="__('Nama Pengaju')" />
                        <x-text-input id="namaPengaju" class="block mt-1 w-full" type="text" name="namaPengaju"
                            :value="$detailKustomisasi -> namaPengaju" readonly />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="quantity" :value="__('Jumlah')" />
                        <x-text-input id="quantity" class="block mt-1 w-full" type="text" name="quantity"
                            :value="$detailKustomisasi -> quantity" readonly />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="color" :value="__('Warna')" />
                        <x-text-input id="color" class="block mt-1 w-full" type="text" name="color"
                            :value="$detailKustomisasi -> color" readonly />
                    </div>
                    <div class="mt-4">
                        <x-input-label for="length" :value="__('Panjang')" />
                        <x-text-input id="length" class="block mt-1 w-full" type="text" name="length"
                            :value="$detailKustomisasi -> length" readonly />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="width" :value="__('Lebar')" />
                        <x-text-input id="width" class="block mt-1 w-full" type="text" name="width"
                            :value="$detailKustomisasi -> width" readonly />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="height" :value="__('Tinggi')" />
                        <x-text-input id="height" class="block mt-1 w-full" type="text" name="height"
                            :value="$detailKustomisasi -> height" readonly />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="notes" :value="__('Catatan')" />
                        <x-text-input id="notes" class="block mt-1 w-full" type="text" name="notes"
                            :value="$detailKustomisasi -> notes" readonly />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="harga" :value="__('Harga')" />
                        <x-text-input id="harga" class="block mt-1 w-full" type="text" name="harga"
                            :value="$detailKustomisasi->harga" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="reasoning" :value="__('Alasan penolakan')" />
                        <x-text-input id="reasoning" class="block mt-1 w-full" type="text" name="reasoning"
                            :value="$detailKustomisasi -> reasoning" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="status" :value="__('Status')" />
                        <select name="status" id="status" class="block mt-1 w-full form-select">
                            <option value="0" @if(old('status', $detailKustomisasi->status) == 1) selected
                                @endif>Ditolak
                            <option value="1" @if(old('status', $detailKustomisasi->status) == 1) selected
                                @endif>Pengajuan
                            </option>
                            <option value="2" @if(old('status', $detailKustomisasi->status) == 2) selected
                                @endif>Customization Approve
                            </option>
                            <option value="3" @if(old('status', $detailKustomisasi->status) == 3) selected
                                @endif>Checking by admin
                            </option>
                            <option value="4" @if(old('status', $detailKustomisasi->status) == 4) selected
                                @endif>Approve
                            </option>
                            <option value="5" @if(old('status', $detailKustomisasi->status) == 5) selected
                                @endif>Bill
                            </option>
                            <option value="6" @if(old('status', $detailKustomisasi->status) == 6) selected
                                @endif>Pembayaran
                            </option>
                            <option value="7" @if(old('status', $detailKustomisasi->status) == 7) selected @endif>Lunas
                            </option>
                        </select>
                    </div>

                    <input type="hidden" value="{{ $detailKustomisasi -> id }}" id="id" name="id">

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button type="submit">
                            {{ __('Update') }}
                        </x-primary-button>
                    </div>

                </form>
            </div>
        </main>
    </div>
</div>
@endsection