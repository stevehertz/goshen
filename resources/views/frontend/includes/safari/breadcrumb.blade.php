 <!-- Page Header Start -->
 <div class="container-fluid page-header mb-5 wow fadeIn" data-wow-delay="0.1s">
     <div class="container">
         <h1 class="display-3 mb-3 animated slideInDown">
             {{ \App\Helper\Helper::getPageTitle() }}
         </h1>
         <nav aria-label="breadcrumb animated slideInDown">

             <ol class="breadcrumb mb-0">
                 <li class="breadcrumb-item">
                     <a class="text-body" href="{{ route('safari') }}">
                         Home
                     </a>
                 </li>
                 @php
                     $breadcrumbs = \App\Helper\Helper::generateBreadcrumb(request());
                 @endphp

                 @foreach ($breadcrumbs as $breadcrumb)
                     @if (!$loop->last)
                         <li class="breadcrumb-item">
                             <a href="{{ $breadcrumb['url'] }}" class="text-body">
                                 {{ $breadcrumb['label'] }}
                             </a>
                         </li>
                     @else
                         <li class="breadcrumb-item text-dark active">
                             {{ $breadcrumb['label'] }}
                         </li>
                     @endif
                 @endforeach

             </ol>
         </nav>
     </div>
 </div>
 <!-- Page Header End -->
