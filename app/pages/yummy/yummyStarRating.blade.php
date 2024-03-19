<!-- Star Rating -->

@for ($i = 1; $i <= 5; $i++)
    @if ($i <= $filledStars)
        <i class="fa-sharp fa-solid fa-star fa-2xl" style="color: #ffd43b"></i>
    @else
        <i class="fa-sharp fa-solid fa-star fa-2xl" style="color: #ffffff"></i>
    @endif
@endfor