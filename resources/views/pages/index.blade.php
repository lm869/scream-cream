@extends('layouts.app')

@section('content')
    {{-- section 1 --}}

    <section class="tw-pt-4 tw-bg-grey-darkest tw-relative md:tw-pb-24 sm:tw-pb-12 tw-overflow-hidden">
        <div class="md:tw-flex tw-items-center">
            <div class="md:tw-w-8/12 sm:tw-w-12/12 tw-px-4">
                <img src="/img/scream-cream-header.png" alt="" class="tw-m-auto md:tw-mt-16 sm:tw-w-9/12 tw-w-full">
                <img src="/img/shadow-scream.png" alt="" class="tw-m-auto tw--mt-12 sm:tw-w-10/12 tw-w-full">
            </div>
            <div class="md:tw-w-4/12 sm:tw-w-12/12 tw-p-8 tw-text-center md:tw-mt-0 sm:tw--mt-20 tw--mt-12">
                <div class="tw-border tw-p-4 square tw-m-auto">
                    <div class="tw-border tw-w-full tw-h-full tw-text-white tw-uppercase xl:tw-text-4xl lg:tw-text-2xl md:tw-text-lg sm:tw-text-base tw-font-light tw-flex">
                        <div class="tw-m-auto md:tw-p-6 tw-p-0">
                            female <br> <strong>sexual</strong> <br> enhancing
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="md:tw-flex tw-text-center tw-items-center tw--m-12 tw-mb-6">
            <div class="tw-flex md:tw-w-9/12 sm:tw-w-full tw-mt-12 md:tw-mt-0 tw-items-center">
                <div class="sm:tw-w-4/12 tw-w-3/12 tw-border-t-2 tw-border-white"></div>
                <div class="sm:tw-w-4/12 tw-w-6/12">
                    <div class="tw-text-white">
                        <p class="tw-text-center tw-w-12/12 tw-m-auto tw-font-light tw-text-xl">
                            Increase Your <strong>Sexual Satistfaction,</strong> <br> Achieve <strong>Better Orgasms</strong> <br> <strong class="tw-uppercase">have fun again!</strong>
                        </p>
                    </div>
                </div>
                <div class="sm:tw-w-4/12 tw-w-3/12 tw-border-t-2 tw-border-white"></div>
            </div>
            <div class="md:tw-w-3/12 sm:tw-w-full sm:tw-mt-10 md:tw-mt-0 tw-mt-4 md:tw-mx-5 tw-mx-0">
                <button class="tw-uppercase tw-text-white lg:tw-text-2xl md:tw-text-base tw-text-lg tw-bg-pink tw-py-4 lg:tw-px-6 tw-px-8">get it now $99</button>
            </div>
            <div class="tw-w-1/12 tw-border-t-2 tw-border-white md:tw-block tw-hidden"></div>
        </div>
    </section>

    @include('layouts.sectiontwo', $data=['color' => 'tw-bg-pink'])

    {{-- section 3 --}}

    <section>
        <div class="tw-flex tw-text-center md:tw-py-24 tw-py-16 tw-items-center">
            <div class="tw-w-3/12 tw-border-t-4 tw-border-grey-darkest"></div>
            <div class="tw-w-7/12 tw-mx-4 tw-font-hairline md:tw-text-5xl sm:tw-text-3xl tw-text-2xl tw-leading-none ">
                Are you one of the <strong>millions</strong> of women affected by <strong class="tw-text-pink tw-uppercase">female sexual dysfunction?</strong> <br> <strong>Don't worry.</strong> <br> <strong class="tw-text-pink">Scream Cream</strong> can get the fun back!
            </div>
            <div class="tw-w-3/12 tw-border-t-4 tw-border-grey-darkest"></div>
        </div>
    </section>

    {{-- section 4 --}}

    <section class="tw-text-center">
        <div class="md:tw-flex tw-items-center tw-px-4">
            <div class="md:tw-w-6/12 sm:tw-w-10/12 tw-m-auto md:tw-mb-0 tw-mb-8">
                <div class="tw-border-4 tw-border-grey-darkest tw-px-8 tw-py-8 md:tw-w-2/3 tw-w-full tw-ml-auto">
                    <img src="/img/what-is.png" alt="what is screamm cream" class="tw-m-auto tw-w-full">
                </div>
            </div>
            <div class="md:tw-w-6/12 tw-w-10/12 tw-m-auto md:tw-text-left tw-text-center tw-flex md:tw-px-12 tw-px-0">
                <div class="md:tw-my-auto md:tw-ml-4">
                    <h2 class="lg:tw-text-5xl tw-text-3xl tw-uppercase tw-leading-none tw-font-light md:tw-text-left sm:tw-text-center">what is <strong class="tw-text-pink"> <br> scream cream?</strong></h2>
                    <p class="no-br tw-font-hairline tw-mt-8 tw-text-xl">
                        <strong>Scream Cream</strong> is a <strong>sexual enhancing <br> medication for women</strong> that is applied <br> externally to the clitoris and other parts of the <br> female genitals. It is transdermal, which means <br> that it can be <strong>efficiently absorbed into the skin</strong> <br> after application and utilized locally around the <br> body tissues without getting into the blood <br> stream.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- section 5 --}}

    <section class="md:tw-py-24 tw-py-16">
        <div class="tw-flex tw-w-full tw-text-center tw-items-center">
            <div class="md:tw-w-3/12 tw-w-2/12 tw-border-t-4 tw-border-grey-darkest"></div>
            <div class="md:tw-w-6/12 tw-w-8/12 md:tw-text-5xl sm:tw-text-3xl tw-text-2xl tw-leading-none md:tw-mx-8 tw-mx-2 tw-font-hairline">
                <strong class="tw-text-pink">Sexual Enhancing</strong> Medication <br> Discreetly Delivered To <strong>Your Door</strong>
            </div>
            <div class="md:tw-w-3/12 tw-w-2/12 tw-border-t-4 tw-border-grey-darkest"></div>
        </div>
        <div class="tw-w-full tw-flex tw-mt-12">
            <button class="tw-m-auto tw-bg-pink tw-text-white tw-px-8 tw-py-4 tw-uppercase sm:tw-text-2xl tw-shadow-xl tw-text-xl">get it now $99</button>
        </div>
    </section>

    {{-- section 6  --}}

    <section class="bg-deserve tw-text-center tw-py-24 tw-text-white tw-leading-none">
        <div class="md:tw-text-5xl sm:tw-text-3xl tw-text-2xl tw-font-light tw-uppercase">you deserve</div>
        <div class="md:tw-text-5xl sm:tw-text-3xl tw-text-2xl tw-font-light tw-uppercase">to <strong>have fun</strong> too!</div>
        <div class="md:tw-text-4xl md:tw-block tw-hidden tw-capitalize tw-font-light">your <strong>sexual arousal</strong> and <strong>performance,</strong></div>
        <div class="tw-text-black md:tw-text-4xl md:tw-block tw-hidden  tw-capitalize tw-font-light tw-mb-16">is bound to be better and <strong>better</strong></div>
    </section>

    {{-- section 7 --}}

    <section class="md:tw-py-20 tw-py-10 md:tw-px-20 tw-px-8">
        <h2 class="tw-text-center md:tw-text-5xl sm:tw-text-3xl tw-text-2xl tw-uppercase tw-font-light tw-m-auto tw-w-10/12">what <strong class="tw-text-pink">scream cream</strong> does</h2>
        <div class="md:tw-flex tw-items-center">
            {{-- <div class="md:tw-flex tw-hidden md:tw-w-8/12 sm:tw-w-full tw-items-center">
                <div class="tw-w-6/12 tw-text-right md:tw-text-xl sm:tw-text-lg tw-text-sm tw-font-light md:tw-mt-0 tw-mt-0">
                    <div>
                        <strong>Improve the rate of blood flow</strong> <br> around the areas that it`s <br> been applied 
                    </div>
                    <div class="md:tw-mt-16 sm:tw-mt-10">
                        Increase your <strong>sexual satisfaction</strong>
                    </div>
                    <div class="md:tw-my-8 sm:tw-my-4">
                        Improves the <strong>sensitivity <br> of your genitals</strong>
                    </div>
                    <div>
                        Increases your chances of <br> <strong>attaining orgasms.</strong>
                    </div>
                </div>
                <div class="tw-w-6/12 md:tw-px-12 tw-px-10">
                    <img src="/img/what-scream.png" alt="" class="tw-m-auto" width="370">
                </div>
            </div> --}}
            <div class="md:tw-w-7/12 sm:tw-w-full tw-items-center xl:tw-py-16 xl:tw-pl-16">
                <img src="/img/scream-text.jpg" alt="">
            </div>
            <div class="xl:tw-w-5/12 md:tw-w-5/12 sm:tw-w-8/12 tw-w-full md:tw-m-0 tw-mt-4 tw-m-auto md:tw-mt-0 sm:tw-mt-8">
                <div class="tw-border-2 tw-border-grey-darkest md:tw-text-xl sm:text-lg md:tw-p-3 md:tw-p-6 tw-p-4 tw-font-light">
                    <p>
                        Scream Cream is a <strong>transdermal</strong> pharmaceutical compound that absorbs efficiently into the mucosa/skin after topical application, it draws its actions from the properties of the following components: 
                    </p>
                    <ul class="md:tw-text-xl sm:text-lg tw-mt-4 stars-list tw-break-normal">
                        <li>
                            <img src="/img/star.png" class="md:tw-mr-2 tw-inline-block" width="13" alt="">
                            Sildenafil Citrate (Generic Viagra )  [ <strong>Vasodilator</strong> ]
                        </li>
                        <li>
                            <img src="/img/star.png" class="md:tw-mr-2 tw-inline-block" width="13" alt="">
                                L-Arginine [ <strong>Vasodilator</strong> ]
                        </li>
                        <li>
                            <img src="/img/star.png" class="md:tw-mr-2 tw-inline-block" width="13" alt="">
                            Aminophylline [ <strong>Bronchodilator</strong> ]
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tw-w-full tw-flex tw-mt-12">
            <button class="tw-m-auto tw-bg-pink tw-text-white tw-px-8 tw-py-4 tw-uppercase md:tw-text-xl sm:text-lg tw-shadow-xl">get it now $99</button>
        </div>
    </section>

    {{-- section 8 --}}

    <section class="pink">
        <div class="tw-flex">
            <div class="md:tw-w-10/12 tw-w-full tw-m-auto tw-relative md:tw-p-16 sm:tw-px-32 tw-px-10 tw-py-16">
                <testimonials :background="'tw-bg-pink'"></testimonials>
            </div>
        </div>
    </section>
@endsection