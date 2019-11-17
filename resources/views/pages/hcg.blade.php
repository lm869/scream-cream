@extends('layouts.app')

@section('content')
{{-- section 1 --}}
  <section class="tw-pt-12 tw-bg-yellow tw-relative">
    <div class="md:tw-flex md:tw-pl-16">
      <div class="tw-w-7/12 tw-leading-none">
        <h1 class="tw-uppercase tw-text-white tw-text-6xl tw-font-bold">
          hcg
        </h1>
        <p class="tw-text-4xl tw-uppercase">
          <strong class="tw-text-white">
            weight loss
          </strong>
          protocol
        </p>
        <div class="w-full tw-border-t-2 tw-border-white tw-my-6"></div>
        <div class="tw-mt-4 tw-text-3xl tw-font-light tw-leading-normal">
            Get Your
            <strong class="tw-text-white">Perfect Body, No Exercise</strong> Needed
            <br>
            No Extended Dosages.
        </div>
        <div class="tw-mt-16">
          <a href="#" class="tw-bg-white tw-py-4 tw-px-10 tw-uppercase tw-text-yellow">start program</a>
        </div>
      </div>
      <div class="tw-w-5/12">
        <img src="/img/hcg-vials.png" alt="" class="w-full tw--mb-20">
      </div>
    </div>
  </section>

  {{-- section 2  --}}

  @include('layouts.sectiontwo', $data=['color' => 'tw-bg-grey'])

  {{-- section 3  --}}

  <section class="tw-pt-12 tw-relative">
    <div class="md:tw-w-7/12 md:tw-pl-24">
      <h2 class="tw-text-4xl tw-font-light">
        WHAT IS
        <strong class="tw-text-yellow">
            HCG DIET ?
        </strong>
      </h2>
      <div class="tw-text-lg tw-mt-4 tw-relative">
        <p class="tw-mt-3">
          <strong>HCG</strong>
          or 
          <strong>Human Chorionic Gonadotropin,</strong>
          is a hormone present at high levels in early
          <br>
          pregnancy.
          <br>
        </p>
        <p class="tw-mt-4">
            While working with malnourished pregnant women in India in the 1950’s, leading British endocrinologist, Dr. ATW Simeons discovered that the
            <strong>HCG hormone</strong>
            helped
            <strong>preserve lean muscle tissue and burn off fat</strong> 
            to support the children while they were in the womb. Over the next 10 years Dr. Simeons spent time experimenting with specific amounts of
            <strong>HCG combined with specific amounts of food.</strong>
            This led him to discover that a large amount of fat loss could result in a relatively short time. He published his findings in his famous book “Pounds and Inches”.
        </p>
        <p class="tw-mt-4">
          There are tons of 
          <strong>different HCG plans available online</strong>
          that tell you what you can and cannot eat while on the diet. However, we 
          <strong>are adhering to the original protocol</strong>
          as noted by Dr. Simeons, in order to get the best results, this plan has been shown to be the best option.
        </p>
      </div>
    </div>
    <div class="tw-flex tw-items-center tw-w-full tw-mt-12 tw-relative">
      <div class="md:tw-w-3/12 tw-border-t-4 tw-border-grey-darker"></div>
      <div class="md:tw-w-5/12 md:tw-text-3xl sm:tw-text-3xl tw-text-xl tw-leading-none md:tw-mx-8 tw-mx-2 tw-font-light tw-text-center">
        <p>
          Have none of the
          <strong>hundreds of diets</strong>
          you’ve tried worked?
          <br>
          Then, this
          <strong class="tw-text-yellow">scientifically designed and tested protocol</strong>
          is FOR YOU!              
        </p>
      </div>
      <img src="/img/salad.png" alt="" width="350" class="tw-absolute tw-right-0">
    </div>
    <div class="w-full tw-text-center tw-mt-16">
      <a href="#" class="tw-text-white tw-py-4 tw-px-10 tw-uppercase tw-bg-yellow tw-mt-16 tw-shadow-md">start program</a>
    </div>
  </section>
  
  {{-- section 4  --}}

  <section class="tw-pt-12 tw-relative">
    <div class="md:tw-w-6/12 md:tw-pl-24">
      <h2 class="tw-text-4xl tw-font-light tw-uppercase">
        how the
        <strong class="tw-text-yellow">
          HCG DIET
        </strong>
        works
      </h2>
      <div class="tw-text-base tw-mt-4 tw-relative">
        <p class="tw-mt-3 tw-font-light tw-text-lg">
          <strong>the HCG protocol is very simple,</strong>
          essentially consisting of a
          <strong>very low-fat, very low-calorie diet,</strong>
          combined with a
          <strong>minimal dosage rx HCG.</strong>
          This combination will directly target stubborn fat in your waist, hips, thighs, butt while maintains muscle integrity. The program it’s composed of 3 phases:
        </p>
      </div>
    </div>
    <div class="tw-flex tw-mt-8 tw-pb-20">
      <div class="tw-w-5/12">
        <img src="/img/elderly-woman.png" alt="" width="400" class="tw-absolute tw-bottom-0">
      </div>
      <div class="tw-w-5/12">
        <ul class="tw-font-light tw-text-lg">
          <li>
            <strong>1. Start Phase:</strong>
            Take a daily HCG dose and eat plenty of high-fat, high-calorie
            <br>
            foods to two or three days.
          </li>
          <li class="tw-mt-3">
            <strong>2. Weight Loss Phase:</strong>
            Take out only a daily HCG dose and eat 500 calories of
            <br>
            protein and vegetables per day for 3-6 weeks.
          </li>
          <li class="tw-mt-3">
            <strong>3. Maintenance Phase:</strong>
            Stop taking HCG. Gradually increase  food intake but
            <br>
            avoid sugar and starch for three weeks.
          </li>
        </ul>
        <div class="tw-my-4 tw-w-9/12 tw-m-auto tw-border-2 tw-py-4 tw-px-10 tw-border-yellow tw-text-center tw-font-light tw-text-lg">
          <p>
              The
              <strong>HCG</strong>
              is what enables your body to be able to function properly while eating at such a deficit. Conversely, if you are taking HCG while still eating the same foods as before, you will not see any weight loss . 
              So once again, the importance of following HCG protocol cannot be stressed enough.
          </p>
        </div>
        <div class="tw-w-10/12 tw-m-auto tw-pl-6 tw-font-light">
          <ul class="tw-mt-2 disc-yellow tw-leading-loose">
            <li>
              <strong>Lose up 5-15lbs</strong>
              on the 26 day program</li>
            <li>
              <strong>Lose up 20lbs-30lbs</strong>
              on the 46 day program</li>
            <li>
              Helps
              <strong>stabilize your metabolism </strong>
              by reseting your hypothalamus</li>
            <li>
              <strong>No exercise</strong> required.</li>
            <li>Burns fat while <strong>preserving muscle</strong></li>
            <li>
              <strong>Increases energy</strong>
              levels </li>
            <li>
              <strong>Improves libido</strong>
            </li>
            <li>Improves mobility and
              <strong>decreases joint pain</strong>
            </li>
          </ul>
        </div>
        <div class="tw-mt-16">
          <a href="#" class="tw-text-white tw-py-4 tw-px-10 tw-uppercase tw-bg-yellow tw-shadow-md">start program</a>
        </div>
      </div>
    </div>
  </section>


  {{-- section 5 --}}

  <section class="tw-p-20 tw-bg-yellow tw-relative">
    <h2 class="tw-uppercase tw-text-4xl tw-font-light">
      <strong class="tw-text-white">
        all you need
      </strong>
      and more!
    </h2>
    <p class="tw-mt-4 tw-text-lg">
        Because the
        <strong>Human Chorionic Gonadotropin Diet</strong>
        is such a
        <strong>drastic change</strong>
        for most people, it is crucial that you 
        <strong>understand and follow the proper protocol.</strong>
        In order to get the best results from a 500 calorie diet, you must to adhere to the strict diet plan as closely as possible and avoid straying away from the eating 
        regimen. Failure to adhere to the protocol can result in decrease or stall weight loss.
    </p>
    <p class="tw-mt-4 tw-text-lg">
      <strong>Nu Image Medical</strong>
      offers you a complete package to successful weight loss. Our program provides
      <strong>complete physician supervision,</strong>
      instructed ebooks, massive amounts of personalized recipes, and even a nutritionist with a master degree, check out the following links to learn more!
    </p>
  </section>

  {{-- section 6 --}}

  <section class="tw-px-20 tw--mt-8 tw-relative">
    <div class="tw-flex tw-items-center tw-justify-between">
      <a href="" class="tw-bg-white tw-py-4 tw-px-10 tw-uppercase tw-text-yellow start-program-button tw-cursor-pointer btn-hcg-shadow">about the diet</a>
      <a href="https://nuimagemedical.com/downloads/HCGDietGuide.pdf" target="_blank" class="tw-bg-white tw-py-4 tw-px-10 tw-uppercase tw-text-yellow start-program-button tw-cursor-pointer btn-hcg-shadow">free guidelines</a>
      <a href="https://nuimagemedical.com/downloads/HCGDietRecipes.pdf" target="_blank" class="tw-bg-white tw-py-4 tw-px-10 tw-uppercase tw-text-yellow start-program-button tw-cursor-pointer btn-hcg-shadow">recipies</a>
      <a href="https://nuimagemedical.com/ebooks" target="_blank" class="tw-bg-white tw-py-4 tw-px-10 tw-uppercase tw-text-yellow start-program-button tw-cursor-pointer btn-hcg-shadow">ebooks</a>
    </div>
  </section>

  {{-- secton 7 --}}

  <section class="tw-relative tw-pt-20 tw-relative">
    {{-- row 1 --}}
    <div class="tw-pl-16 tw-flex tw-w-9/12 tw-justify-between">
      <div class="tw-w-2/12">
        <img src="/img/icons/ultra-burn-icon.svg" alt="" width="90" class="tw-m-auto">
      </div>
      <div class="tw-w-10/12">
        <h3 class="tw-font-normal tw-uppercase tw-mb-2">
          ultra
          <strong class="tw-text-yellow">burn</strong>
        </h3>
        <div class="tw-flex tw-items-start">
          <p class="tw-pr-6 tw-text-justify tw-font-light tw-w-7/12 tw-text-lg">
              Our lipotropics consist of an
              <strong>ultra-high potency mixture</strong>
              of Amino acids, B-Complex, Vitamins and natural fat burners designed specifically to
              <strong>continue fat loss, boost energy and increase nutritional supplementation</strong>
              while finishing your Phase 3 Maintenance.
          </p>
          <a href="#" class="tw-text-white tw-py-4 tw-px-12 tw-uppercase tw-bg-yellow btn-hcg-shadow tw-ml-8">more info</a>
        </div>
      </div>
    </div>
    {{-- row 2 --}}
    <div class="tw-pl-16 tw-flex tw-w-9/12 tw-justify-between tw-mt-8">
      <div class="tw-w-2/12">
        <img src="/img/icons/food-delivery.svg" alt="" width="90" class="tw-m-auto">
      </div>
      <div class="tw-w-10/12">
        <h3 class="tw-font-normal tw-uppercase tw-mb-2">
          food
          <strong class="tw-text-yellow">deivery</strong>
        </h3>
        <div class="tw-flex tw-items-start">
          <p class="tw-pr-6 tw-text-justify tw-font-light tw-w-7/12 tw-text-lg">
            Our
            <strong>HCG Diet chef</strong>
            will
            <strong>prepare and deliver</strong>
            your
            <strong>perfectly measured designer meals</strong>
            anywhere in the United States. Each meal has been calorie counted to fall within the Dr. Simeons VLCD program.
          </p>
          <a href="#" class="tw-text-white tw-py-4 tw-px-12 tw-uppercase tw-bg-yellow btn-hcg-shadow tw-ml-8">more info</a>
        </div>
      </div>
    </div>
    {{-- row 3 --}}
    <div class="tw-pl-16 tw-flex tw-w-9/12 tw-justify-between tw-mt-8">
      <div class="tw-w-2/12">
        <img src="/img/icons/shakes.svg" alt="" width="90" class="tw-m-auto">
      </div>
      <div class="tw-w-10/12">
        <h3 class="tw-font-normal tw-uppercase tw-mb-2">
          hcg diet
          <strong class="tw-text-yellow">shakes</strong>
        </h3>
        <div class="tw-flex tw-items-start">
          <p class="tw-pr-6 tw-text-justify tw-font-light tw-w-7/12 tw-text-lg">
            <strong>Individually packed protein/meal replacement packs</strong>
            that have been specifically formulated to be HCG Diet SAFE, Sweetened with Stevia only.
          </p>
          <a href="#" class="tw-text-white tw-py-4 tw-px-12 tw-uppercase tw-bg-yellow btn-hcg-shadow tw-ml-8">more info</a>
        </div>
      </div>
    </div>
    {{-- row 4 --}}
    <div class="tw-pl-16 tw-flex tw-w-9/12 tw-justify-between tw-mt-8">
      <div class="tw-w-2/12">
        <img src="/img/icons/supplement.svg" alt="" width="90" class="tw-m-auto">
      </div>
      <div class="tw-w-10/12">
        <h3 class="tw-font-normal tw-uppercase tw-mb-2">
          supplement
          <strong class="tw-text-yellow">bundle</strong>
        </h3>
        <div class="tw-flex tw-items-start">
          <p class="tw-pr-6 tw-text-justify tw-font-light tw-w-7/12 tw-text-lg">
            Four
            <strong>TOP HCG Diet supplements</strong>
            that should be taken while on the HCG Diet program. These products are
            <strong>pharmaceutical grade</strong>
            being delivered directly from our compounding pharmacy.
          </p>
          <a href="#" class="tw-text-white tw-py-4 tw-px-12 tw-uppercase tw-bg-yellow btn-hcg-shadow tw-ml-8">more info</a>
        </div>
      </div>
    </div>
    <div class="w-full tw-text-center tw-py-12 tw-mt-16 tw-bg-grey-darker">
      <h2 class="tw-text-3xl">IT`S TIME TO MAKE A
        <strong class="tw-text-white">CHANGE</strong>
      </h2>
    </div>
    <img src="/img/latin-girl.png" alt="" width="400" class="tw-absolute tw-right-0 tw-bottom-0">
  </section>

  {{-- section 8 --}}

  <section class="yellow">
      <div class="md:tw-w-10/12 tw-w-full tw-m-auto tw-relative md:tw-p-16 sm:tw-px-32 tw-px-10 tw-py-16">
        <testimonials :background="'tw-bg-yellow'"></testimonials>
      </div>
  </section>

@endsection