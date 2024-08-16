@extends('Pages.HalmanUtama.Layout')

@section('PageContent')
    <div class="container-fluid">
        <h2 class="section-title">Buku Terfavorite</h2>
        <div class="book-scroll-container">
            <div class="book-container">
                <div class="book">
                    <a href=""><img src="assets/img/1.jpeg" alt="Senja di tepi pantai"></a>
                    <p class="book-title">Senja di tepi pantai</p>
                </div>
                <div class="book">
                    <a href=""><img src="assets/img/2.jpeg" alt="Perahu Kertas"></a>
                    <p class="book-title">Perahu Kertas</p>
                </div>
                <div class="book">
                    <a href=""><img src="assets/img/3.jpeg" alt="Rasa Yang Sirna di Lautan"></a>
                    <p class="book-title">Rasa Yang Sirna di Lautan</p>
                </div>
                <div class="book">
                    <a href=""><img src="assets/img/4.jpeg" alt="Kabut Hutan Semeru"></a>
                    <p class="book-title">Kabut Hutan Semeru</p>
                </div>
                <div class="book">
                    <a href=""><img src="assets/img/11.jpeg" alt="Rasa Yang Sirna di Lautan"></a>
                    <p class="book-title">Rasa Yang Sirna di Lautan</p>
                </div>
                <div class="book">
                    <a href=""><img src="assets/img/12.jpeg" alt="Rasa Yang Sirna di Lautan"></a>
                    <p class="book-title">Rasa Yang Sirna di Lautan</p>
                </div>
                <div class="book">
                    <a href=""><img src="assets/img/15.jpeg" alt="Kabut Hutan Semeru"></a>
                    <p class="book-title">Kabut Hutan Semeru</p>
                </div>
                <div class="book">
                    <a href=""><img src="assets/img/16.jpeg" alt="Rasa Yang Sirna di Lautan"></a>
                    <p class="book-title">Rasa Yang Sirna di Lautan</p>
                </div>
            </div>
        </div>

        <h2 class="section-title">Buku Terbaru</h2>
        <div class="book-scroll-container">
            <div class="book-container">
                <div class="book">
                    <a href=""><img src="assets/img/6.jpeg" alt="Perahu Kertas"></a>
                    <p class="book-title">Perahu Kertas</p>
                </div>
                <div class="book">
                    <a href=""><img src="assets/img/7.jpeg" alt="100 Dongeng Nusantara"></a>
                    <p class="book-title">100 Dongeng Nusantara</p>
                </div>
                <div class="book">
                    <a href=""><img src="assets/img/13.jpeg" alt="Senja di tepi pantai"></a>
                    <p class="book-title">Senja di tepi pantai</p>
                </div>
                <div class="book">
                    <a href=""><img src="assets/img/9.jpeg" alt="Kabut Hutan Semeru"></a>
                    <p class="book-title">Kabut Hutan Semeru</p>
                </div>
                <div class="book">
                    <a href=""><img src="assets/img/10.jpeg" alt="Kisah"></a>
                    <p class="book-title">Kisah</p>
                </div>
                <div class="book">
                    <a href=""><img src="assets/img/16.jpeg" alt="Senja di tepi pantai"></a>
                    <p class="book-title">Senja di tepi pantai</p>
                </div>
                <div class="book">
                    <a href=""><img src="assets/img/20.jpeg" alt="Kabut Hutan Semeru"></a>
                    <p class="book-title">Kabut Hutan Semeru</p>
                </div>
                <div class="book">
                    <a href=""><img src="assets/img/19.jpeg" alt="Kisah"></a>
                    <p class="book-title">Kisah</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('Css')
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }


        .container {
            margin: 0 40px;
        }

        .book-scroll-container::-webkit-scrollbar {
            display: none;
        }

        .book-scroll-container {
            width: 100%;
            overflow-x: scroll;
        }


        .book-container {
            display: flex;
            width: 100%;
            gap: 2rem;
        }


        .book {
            flex: 0 0 auto;
            min-width: 20vw;
            max-width: 250px;
        }

        @media (max-width: 768px) {
            .book {
                min-width: 30vw;
                max-width: 40vw;
            }
        }

        @media (max-width: 480px) {
            .book {
                min-width: 40vw;
                max-width: 50vw;
            }
        }

        .book img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .book-title {
            margin-top: 12px;
            font-size: 1.1em;
            color: #333;
        }

        .section-title {
            margin-top: 20px;
            font-size: 1.7em;
            color: #333;
        }
    </style>
@endsection
