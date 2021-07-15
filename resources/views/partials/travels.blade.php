<section id="travels">
    <div class="container d-flex flex-wrap justify-content-center">
        @foreach ($travels as $travel)
            <div class="travel">
                <img src="{{ $travel->image }}" alt="{{ $travel->title }}">
                <ul>
                    <li>{{ $travel->title }}</li>
                    <li>{{ $travel->location }}</li>
                    {{-- <li>{{ $travel->stars }}</li> --}}
                    <li>
                        @for ($i = 0; $i < $travel->stars; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                    </li>
                    <li>{{ $travel->address }}</li>
                    <li>{{ $travel->vote }}/10</li>
                    <li>{{ $travel->free_cancellation == 1? 'Cancellazione Gratuita':'' }}</li>
                    <li>{{ $travel->room }}</li>
                    <li>{{ $travel->board }}</li>
                    <li>{{ $travel->price }}</li>
                </ul>
            </div>
        @endforeach
    </div>
</section>