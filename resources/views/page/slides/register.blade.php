<div class="content">

    <h1 class="text-white text-uppercase mb-5">
        register
    </h1>

    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
            {{ $error }}
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('register.post') }}" method="post">
        {{-- <form> --}}

        @csrf
        <div class="row justify-content-center m-0">
            @foreach (config('data.form') as $item => $value)
            {{-- {{ $value['type'] }} --}}
            @if ( $value['type'] != 'select')
            <div class="form-group col-12 col-md-6">
                {{-- <label for="{{$item}}">{{$item}}</label> --}}
                <input type="{{$value['type']}}" name="{{$item}}" class="form-control reqf" id="{{$item}}"
                    placeholder=" " required>

                <div class="input-ph text-uppercase">{{ $value['ph'] }}<span> *</span></div>
            </div>
            @else
            <div class="form-group col-12 col-md-6">
                {{-- <label for="exampleFormControlSelect1">{{ $value['ph'] }}</label> --}}
                @if ($value['req'] == true)
                <select class="form-control form-control-req" id="{{ $item }}" name="{{$item}}" required>
                    <option value="" selected hidden></option>
                    @foreach ($value['option'] as $key => $option)
                    <option value="UNIT {{$key . " " . $option}} SQ FT">UNIT {{$key . " " . $option}} SQ FT</option>
                    @endforeach
                </select>

                <div class="select-ph text-uppercase">{{ $value['ph'] }}<span> *</span></div>
                @else
                <select class="form-control" id="{{ $item }}" name="{{$item}}">
                    <option value=" " selected hidden>{{ $value['ph'] }}</option>
                    @foreach ($value['option'] as $option)
                    <option>{{$option}}</option>
                    @endforeach
                </select>
                <div class="select-ph text-uppercase">{{ $value['ph'] }}<span> *</span>
                </div>
                @endif

            </div>
            @endif

            @endforeach
            <div class="form-group col-12 text-left">
                <label for="Textarea1">
                    <h4 class="text-white text-uppercase">Comments</h4>
                </label>
                <textarea class="form-control" name="comments" id="Textarea1" rows="3"
                    style="text-transform: inherit;"></textarea>
            </div>

            <div class="form-check-wrapper">
                <div class="form-check" style="padding:0 15px; padding-left: 3rem;">

                    <label class="form-check-label text-left text-white mb-5" for="defaultCheck1">
                        <div class="checkbox">
                            <input class="form-check-input" type="checkbox" name="checkbox" id="defaultCheck1">
                            <span class="checkmark"></span>
                        </div>
                        <span class="text-blue">* </span>Click to confirm your consent to receive e-communications from
                        Phoenix Homes including information
                        about this and upcoming developments, promotions, VIP early access or special offers. Should you
                        wish to be excluded, please email us at <a href="mailto:sales@phoenixhomesbc.ca"
                            class="text-white">sales@phoenixhomesbc.ca</a> or click the appropriate link at
                        the
                        bottom of any email received.
                    </label>
                </div>
            </div>
            <div class="load1">
                <div class="loader"></div>
            </div>
            <button type="submit" class="btn reg-btn-blue mb-2">Submit</button>
        </div>

    </form>

</div>