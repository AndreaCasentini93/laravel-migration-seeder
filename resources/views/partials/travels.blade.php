<section id="travels">
    <div class="container d-flex flex-wrap justify-content-center">
        @foreach ($travels as $travel)
            <a href="/" class="travel">
                <img src="{{ $travel->image }}" alt="{{ $travel->title }}">
                <ul>
                    <li class="title">{{ $travel->title }}</li>
                    <li>
                        <ul class="d-flex align-items-center">
                            <li class="location">{{ $travel->location }}</li>
                            <li class="stars d-flex">
                                @for ($i = 0; $i < $travel->stars; $i++)
                                    <div class="d-flex align-items-center">
                                        <i class="fas fa-star"></i>
                                    </div>
                                @endfor
                            </li>
                        </ul>
                    </li>
                    <li class="address">{{ $travel->address }}</li>
                    <li class="vote">Voto {{ $travel->vote }}/10</li>
                    <li class="free_cancellation">{{ $travel->free_cancellation == 1? '* Cancellazione Gratuita *':'' }}</li>
                    <li class="room">{{ $travel->room }}</li>
                    <li class="board">{{ $travel->board }}</li>
                    <li class="price">{{ $travel->price }}</li>
                </ul>
            </a>
        @endforeach
    </div>
</section>