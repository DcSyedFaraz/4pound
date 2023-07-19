@extends('layouts.web')
@section('title', 'Order Now')
@section('description', '')
@section('canonical', config('app.app_url') . Request::path())
@section('content')

<style>
    .g-color {
        background: -webkit-linear-gradient(right, #73c04e, #26ACE2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
</style>

<section class="container mx-auto">     
    <div class="grid grid-col-1 sm:grid-cols-4 my-4 gap-x-4 gap-y-4 mx-4 ">
        <div class="col-span-4 xl:col-span-3 bg-[#174a4e] rounded-xl ">
            <div class=" text-center ">
                <div class="bg-primary-two py-2 px-5 rounded-t-xl ">
                    <p class="text-3xl text-white uppercase font-semibold text-center">Order Now</p>
                </div>
            </div>
            @if (session('success'))
            <div class="md:w-1/2 my-4 mx-auto bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md"
                role="alert">
                <div class="flex">
                    <div class="py-1">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 50 50"
                            style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <circle style="fill:#25AE88;" cx="25" cy="25" r="25" />
                            <polyline
                                style="fill:none;stroke:#FFFFFF;stroke-width:2;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;"
                                points="
                    38,15 22,33 12,25 " />
                        </svg>
                    </div>
                    <div>
                        <p class="text-center font-bold">{{ session('success') }}</p>
                    </div>
                </div>
            </div>
        @endif

            <form class="grid grid-cols-1 md:grid-cols-2 gap-x-4 gap-y-2 px-10  py-8" id="order-form" method="POST" action="{{ route('order.store') }}" enctype="multipart/form-data">
                @csrf
                <h4 class="md:col-span-2 text-xl text-white font-bold uppercase pb-2 ">
                    Personal Details
                </h4>
                
                <div class="w-full">
                    <input type="text" name="name" class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-two focus:ring-2 focus:ring-primary-two text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out placeholder-gray-600" placeholder="Full Name" value="">
                    @error('name')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                                            </div>

                <div class="w-full">
                    <input type="text" name="email" class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-two focus:ring-2 focus:ring-primary-two text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out placeholder-gray-600" placeholder="Email" value="">
                    @error('email')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                                            </div>

                <div class="w-full">
                    <input id="phone" name="Phone" type="tel" class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-two focus:ring-2 focus:ring-primary-two text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out placeholder-gray-600" placeholder="Phone" value="{{ old('phone') }}"
                    oninput="this.value=this.value.replace(/[^0-9\+]/g,'');" autocomplete="off"
                    data-intl-tel-input-id="0">
                    <input id="phone2" name="phone" type="hidden" >
                    @error('phone')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
 
                </div>

               

                <div class="w-full">
                    <select type="text" name="country" class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-two focus:ring-2 focus:ring-primary-two text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                        <option hidden="" value="0" disabled="" selected="" >Country</option>
                        @foreach ($countries as $country)
                        <option {{ old('$country') == $country->id ? 'selected' : '' }}
                            value="{{ $country->name }}">{{ $country->name }}</option>
                        @endforeach
                                                            {{-- <option value="AF">Afghanistan</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option> --}}
                        </select>
                        @error('country')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
 
                                            </div>
                
                <h4 class="md:col-span-2 text-xl text-white font-bold uppercase pb-2 ">
                    Order Details
                </h4>                       
                <div class="w-full">
                    <input type="text" name="paper_topic" class=" w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-two focus:ring-2 focus:ring-primary-two text-base outline-none px-3 leading-8 transition-colors duration-200 ease-in-out placeholder-gray-600" placeholder="Paper Topic" value="">
                    @error('paper_topic')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
 
                    </div>
              
                <div class="w-full">
                    <select name="paper_type" type="text" class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-two focus:ring-2 focus:ring-primary-two text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                        <option hidden="" value="0" disabled="" selected="" >Paper Type</option>
                        @foreach ($paper_types as $paper_type)
                        <option {{ old('$paper_type') == $paper_type->id ? 'selected' : '' }}
                            value="{{ $paper_type->id }}">{{ $paper_type->name }}</option>
                        @endforeach
                                                            {{-- <option value="1">Essay</option>                                    
                                                            <option value="2">Term Paper</option>                                    
                                                            <option value="3">Research Paper</option>                                    
                                                            <option value="4">Course Work</option>                                    
                                                            <option value="5">Thesis Proposal</option>                                --}}
                                                    </select>
                        @error('paper_type')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                                            </div>
                <div class="w-full">
                    <select id="deadline" name="deadline" type="text" class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-two focus:ring-2 focus:ring-primary-two text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                        <option hidden="" value="0" disabled="" selected="">Deadline</option>
                        @foreach ($deadlines as $deadline)
                        <option {{ old('$deadline') == $deadline->id ? 'selected' : '' }}
                            value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                        @endforeach
                                                            {{-- <option value="1">15 Days</option>                                    
                                                            <option value="2">10 Days</option>                                    
                                                            <option value="3">7 Days</option>                                       --}}
                                                    </select>
                                                    @error('deadline')
                                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                                @enderror
                                            </div>

                <div class="w-full">
                    <select name="subject_area" type="text" class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-two focus:ring-2 focus:ring-primary-two text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                        <option hidden="" value="0" disabled="" selected="">Subjects</option>
                        @foreach ($subjects as $subject)
                        <option {{ old('$subject') == $subject->id ? 'selected' : '' }}
                            value="{{ $subject->name }}">{{ $subject->name }}</option>
                        @endforeach
                                                            {{-- <option value="1">Art</option>                                    
                                                            <option value="2">Architecture</option>                                    
                                                            <option value="3">Dance</option>                                    
                                                            <option value="4">Design Analysis</option>                                    
                                                            <option value="5">Drama</option>                                    
                                                            <option value="6">Movies</option>                                   --}}
                                                    </select>
                                                    @error('subject')
                                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                                @enderror
                                            </div>

                <div class="w-full">
                    <select type="text" name="number_of_pages" id="no_of_pages" class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-two focus:ring-2 focus:ring-primary-two text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                        <option hidden="" value="0" disabled="" selected="">No of words</option>
                        @for ($i = 1; $i <= 200; $i++)
                        <option  {{ old('number_of_pages') == $i ? 'selected' : '' }} value="{{ $i }}"  >{{ 250 * $i . ' Words ' . ' / ' . $i . ' Pages ' }}</option>
                        @endfor               
                        {{-- <option value="1">
                                250 Words - 1 Pages
                            </option>
                                                            <option value="2">
                                500 Words - 2 Pages
                            </option>
                                                            <option value="3">
                                750 Words - 3 Pages
                            </option>
                                                            <option value="4">
                                1000 Words - 4 Pages
                            </option> --}}
                                                    </select>
                                                    @error('number_of_pages')
                                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                                @enderror
                                            </div>

                <div class="w-full">
                    <select id="academic_level" type="text" name="academic_level" class="get-fare w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-two focus:ring-2 focus:ring-primary-two text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                        <option hidden="" value="0" disabled="" selected="">Academic level</option>
                        @foreach ($academic_levels as $academic_level)
                                    <option {{ old('$academic_level') == $academic_level->id ? 'selected' : '' }}
                                        value="{{ $academic_level->id }}">{{ $academic_level->name }}</option>
                        @endforeach     
                                </select>
                                                    @error('phone')
                                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                                @enderror
                                            </div>

                <div class="w-full">
                    <select name="reference"  class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-two focus:ring-2 focus:ring-primary-two text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                        <option hidden="" value="0" disabled="" selected="">References</option>
                        
                        @for ($i=1 ; $i<81 ;$i++)
                            <option value={{ $i }} {{ old('reference') == $i ? 'selected' : '' }}>{{ $i }}</option>
                        @endfor
                                                            
                                                    </select>
                                                    @error('style')
                                                    <p class="text-red-600 text-sm">{{ $message }}</p>
                                                @enderror
                                            </div>

                <div class="w-full">
                    <select name="style" type="text" class="w-full text-gray-700 rounded border border-gray-300 bg-white  focus:border-primary-two focus:ring-2 focus:ring-primary-two text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out ">
                        <option hidden="" value="0" disabled="" selected="">Reference Styles</option>
                        @foreach ($reference_styles as $reference_style)
                        <option {{ old('$reference_style') == $reference_style->id ? 'selected' : '' }}
                            value="{{ $reference_style->name }}">{{ $reference_style->name }}</option>
                        @endforeach                                
                            </select>
                            @error('reference_style')
                            <p class="text-red-600 text-sm">{{ $message }}</p>
                        @enderror
                                            </div>

                <div class="w-full md:col-span-2">
                    <textarea type="text" name="detail" rows="2" class=" w-full text-gray-700 rounded border border-gray-300 bg-white focus:border-primary-two focus:ring-2 focus:ring-primary-two text-base outline-none py-1 px-3 leading-8 transition-colors duration-200 ease-in-out placeholder-gray-600" placeholder="Type details here..."></textarea>
                                            </div>
                                   
                <div class="w-full mb-3">
                    <label class="text-xl text-white font-bold">Attach File</label>
                    <div class="w-full px-1 mb-3">
                        <p class="text-primary-two text-base ">Attach File (max file attach : 10 | max file
                            size : 25Mb)</p>
                        <input type="file" name="emailAttachments[]" multiple="" class="w-full text-white  rounded border border-primary-two focus:border-primary-one focus:ring-2 focus:ring-blue-200 text-base outline-none py-2 px-3 leading-8 transition-colors duration-200 ease-in-out " accept=".pdf,.ppt,.pptx,.doc,.docx,.xls,.xlsx,.csv,.txt,.jpeg,.jpg,.png,.gif,.sav,.sps,.spv,.spo,.mat,.zip,.rar" aria-describedby="email_attacements_help" id="email_attacements">
                    </div>
                    <p class="text-primary-two text-sm">if file is larger then 25Mb then please email us on
                        <a href="mailto:{{ $web_setting->email }}" class="hover:underline underline-offset-4 "> info@4poundessay.co.uk</a></p>

                </div>

                <div class=" w-full ">
                    <label class="text-xl text-white font-bold ">Select Space</label>
                    <div class="flex items-center pb-6 mt-4 border-b border-primary-one">

                        <div class="ml-5 form-check form-check-inline">
                            <input name="spacing"  class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-900 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" id="single" value="1" checked="">
                            <label class="  form-check-label inline-block text-white" for="single"> Single Space </label>
                        </div>
                        <div class="ml-10 form-check form-check-inline">
                            <input  name="spacing" class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-900 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" id="double" value="2">
                            <label class=" form-check-label inline-block text-white" for="double"> Double Space </label>
                        </div>
                    </div>

              
                    <h4 class=" text-center text-1xl text-white font-bold uppercase pt-6">
                        Pricing:  <span class="text-3xl"> <span id="total-cost">0</span> £</span>
                    </h4>
                </div>

                

                <div class="md:col-span-2 text-center mt-4">
                    <button id="btn-submit" type="submit" class="btn-sec-2">
                        Submit Order
                    </button>
                </div>
            </form>
                         
        </div>

        <div class=" col-start-2 col-span-2 xl:col-span-1 flex flex-col space-y-8">
            <div class="panel">
                
                <div class=" border border-t-4 border-b-4 border-primary-two py-2 px-5 rounded-t-lg rounded-b-lg p-5 flex flex-col md:ml-auto w-full ">
                    <p class="text-xl text-center g-color font-semibold pb-3">Any Questions?</p>
                    <h4 class="text-lg font-semibold flex flex-col justify-center items-center text-[#626262] ">
                       <a href="https://api.whatsapp.com/send?phone={{ $web_setting->contact }}"> call now:{{ '+'.$web_setting->contact }}</a>
                    <a href="javascript:void(Tawk_API.toggle())" class="btn-sec-2 mt-4 mb-2">
                        Live Chat
                    </a>
                    </h4>
                </div>
            </div>
          
            <div class="border border-t-4 border-b-4 border-primary-two py-2 px-5 rounded-t-lg rounded-b-lg p-5 flex flex-col md:ml-auto w-full ">
                <p class="text-xl text-center g-color font-semibold pb-3">We Accept</p>
                <img class="h-6 " src="../imgs/payment-order.png" alt="" class="mx-auto">
            </div>
           
            <div class="border border-t-4 border-b-4 border-primary-two py-2 px-5 rounded-t-lg rounded-b-lg p-5 flex flex-col md:ml-auto w-full ">
                
                <img class="w-32 mx-auto" src="../imgs/satisfaction-bg.png" alt="">
                <img class="w-56 mx-auto" src="../imgs/moneyback-bg.png" alt="">
                
            </div>
        </div>

    </div>

</section>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        
        const phoneInputField = document.querySelector("#phone");
        const phoneInput = window.intlTelInput(phoneInputField, {
        preferredCountries: ["GB"],
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
        });

        $("#order-form").submit(function() {
            $('#order-form').find(':submit').attr("disabled", true);
            $('#btn-submit').html("Submiting...");
            const phoneNumber = phoneInput.getNumber();
            $('#phone2').val(phoneNumber);
            return true;
            });
        
        const fares = @json($fares);

        $(".get-fare").change(function() {
            const academic_level    = $('#academic_level').val();
            const deadline          = $('#deadline').val();
            const no_of_pages       = $('#no_of_pages').val() == null ? 1 : $('#no_of_pages').val();
            fares.forEach(fare => {
                if (deadline == fare.deadline_id && academic_level == fare.academic_level_id) {
                    $('#cost-per-page').html(fare.per_page_price);
                    $('#total-cost').html(fare.per_page_price * no_of_pages);
                }
            });
        });
    });
</script>
@endsection
