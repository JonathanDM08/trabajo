 @props(['type'])
@php
 switch ($type) {
   
    case 'info':
    
    $class =  'text-blue-800 bg-blue-50 dark:bg-blue-800 dark:text-gray-400';
        break;

    case 'danger':
    
    $class = 'text-red-800 bg-blue-50 dark:bg-red-800 dark:text-blue-400';
        break;

    case 'success':
    
    $class = 'text-blue-800 bg-blue-50 dark:bg-green-800 dark:text-blue-400';
        break;

    case 'warning':
    
    $class = 'text-yellow-800 bg-blue-50 dark:bg-yellow-800 dark:text-blue-400';
        break;

    case 'dark':
    
    $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
        break;
    
    default:
    $class =  'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
        break;
 }
@endphp

<div class="p-4 mb-4 text-sm  rounded-lg {{$class}}" role="alert">
  <span class="font-medium">{{$title ?? 'Info Alert!'}}</span> {{$slot}}
</div>
