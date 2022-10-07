@if ($paginator->hasPages())
<div class="pagination-wrap">
    <ul class="pagination"> 
        @if ($paginator->onFirstPage())
        <li>
            <a class="page-link" href="#" 
               tabindex="-1"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
        </li>
        @else
        <li><a class="page-link" 
            href="{{ $paginator->previousPageUrl() }}">
            <i class="fa fa-chevron-left" aria-hidden="true"></i></a>
          </li>
        @endif
  
        @foreach ($elements as $element)
        @if (is_string($element))
        <li class="page-item disabled">{{ $element }}</li>
        @endif
  
        @if (is_array($element))
        @foreach ($element as $page => $url)
        @if ($page == $paginator->currentPage())
        <li class="page-item active">
            <a class="page-link">{{ $page }}</a>
        </li>
        @else
        <li class="page-item">
            <a class="page-link" 
               href="{{ $url }}">{{ $page }}</a>
        </li>
        @endif
        @endforeach
        @endif
        @endforeach
  
        @if ($paginator->hasMorePages())
        <li class="page-item">
            <a class="page-link" 
               href="{{ $paginator->nextPageUrl() }}" 
               rel="next"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
        @else
        <li class="page-item disabled">
            <a class="page-link" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
        </li>
        @endif
    </ul>
@endif