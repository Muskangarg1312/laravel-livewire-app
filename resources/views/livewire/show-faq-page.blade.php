<section class="section">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-6">
          <div class="section-title text-center">
            <p class="text-primary text-uppercase fw-bold mb-3">Frequient Questions</p>
            <h1>Frequently Asked Questions</h1>
          </div>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-9">
          <div class="accordion accordion-border-bottom" id="accordionFAQ">
            @if ($faqs->isNotEmpty())
            @php
                $x = 1;
            @endphp
            @foreach ($faqs as $faq)
            <div class="accordion-item">
                <h2 class="accordion-header accordion-button h5 border-0 {{ ($x == 1) ? 'active' : '' }}"
                  id="heading-{{ $x }}" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapse-{{ $x }}" aria-expanded="true"
                  aria-controls="collapse-{{ $x }}">
                 {{ $faq->question }} 
                </h2>
                <div id="collapse-{{ $x }}"
                  class="accordion-collapse collapse border-0 {{ ($x == 1) ? 'show' : '' }} "
                  aria-labelledby="heading-{{ $x }}" data-bs-parent="#accordionFAQ">
                  <div class="accordion-body py-0 content">{!! $faq->answer !!}</div>
                </div>
              </div>
            @php
                $x++;
            @endphp
            @endforeach
            @else
            No FAQ found  
            @endif
            </div>
        </div>
      </div>
    </div>
  </section>
