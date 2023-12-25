<div>

<section class="bg-gradient-primary-to-secondary py-5" id="kontak">
    <div class="container mt-5 mb-5">
        <div class="card rounded-4 shadow">
            <div class="card-body p-5">
                <div class="row">
                    <!-- Informasi Nomor HP (Kiri) -->
                    <div class="col-md-6">
                        <h2>Contact Information</h2>
                        <p>Feel free to contact us at:</p>
                        <table>
                            <tbody>

                                <tr>
                                    <td><b>Email</b></td>
                                    <td>: <a href="mailto:vernandaspw@gmail.com">vernandaspw@gmail.com</a> </td>
                                </tr>
                                <tr>
                                    <td><b>WhatsApps</b></td>
                                    <td>: <a href="https://api.whatsapp.com/send?phone=6282299998741&text=Hi..">+62822 9999 8741</a> </td>
                                </tr>
                                <tr>
                                    <td><b>Instagram</b></td>
                                    <td>: <a href="https://instagram.com/nandicode">@nandicode</a></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="d-md-none d-block mt-5"></div>
                    <!-- Formulir (Kanan) -->
                    <div class="col-md-6">
                        <h2>Contact </h2>
                        <form wire:submit='kirim'>
                            <div class="form-group">
                                <label for="name">Nama:</label>
                                <input type="text" wire:model='nama' class="form-control rounded-pill" id="name" placeholder="Enter your name">
                            </div>
                            {{-- <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control rounded-pill" id="email" placeholder="Enter your email">
                            </div> --}}
                            <div class="form-group">
                                <label for="message">Pesan:</label>
                                <textarea wire:model='input_msg' class="form-control rounded" id="message" rows="4"
                                    placeholder="Enter your message"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success mt-2 form-control rounded-pill">Kirim</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
</div>
