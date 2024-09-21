@foreach ($testimonials as $testimonial)

<div class="testimonial-item">
    <div class="testimonial-quote"><i class="fa fa-quote-right fa-2x"></i>
    </div>
    <div class="testimonial-inner p-4">
        <img src="{{ asset('storage/' . $testimonial->image) }}" class="img-fluid" alt="">
        <div class="ms-4">
            <h4>{{$testimonial->name}}</h4>
            <p>{{$testimonial->profession}}</p>
            <div class="d-flex text-primary">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star text-body"></i>
            </div>
        </div>
    </div>
    <div class="customer-text p-4">
        <p class="mb-0">{{$testimonial->description}}</p>
    </div>
</div>
@endforeach
