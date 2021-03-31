<div>
    <input type="{{$type}}" name="{{$name}}" id="{{$name}}" placeholder="{{$placeholder}}"
           required="{{$required ? 'required' : ''}}" aria-label="{{$placeholder}}"
           class="w-full shadow-accent rounded-lg px-4 py-2 text-lg placeholder-gray-300 border-none" />
    <p class="input-error error-{{$name}} hidden px-4 pt-2 text-sm text-red-500"></p>
</div>