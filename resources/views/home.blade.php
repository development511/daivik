@foreach($result as $item)
@if( $item->age<=5)
 {{ $item->name }}
 {{ $item->age }}
 {{ $item->likes }}
 {{  $item->comments  }}
@endif    
@if( $item->age<=6)
{{ $item->name }}
 {{ $item->age }}
 {{ $item->likes }}
 {{  $item->comments  }}
@endif 
@if( $item->age<=7)
{{ $item->name }}
 {{ $item->age }}
 {{ $item->likes }}
 {{  $item->comments  }}
@endif
 @endforeach