import axios from 'axios';
import PortalVue from 'portal-vue';
import Vue from 'vue';

window.axios = axios;
window.Vue = Vue;

window.Bus = new Vue();
Vue.prototype.$bus = Bus;

Vue.prototype.$laravel = window.Laravel;

Vue.use(PortalVue);

// const BlackFridayCouponRevealer = () =>
//   import(/* webpackChunkName: "assets/js/components/black-friday/black-friday-coupon-revealer" */ '../components/black-friday/BlackFridayCouponRevealer.vue');
// const ChatConversation = () =>
//   import(/* webpackChunkName: "assets/js/components/chat/chat-conversation" */ '../components/chat/ChatConversation.vue');
// const CountUp = () =>
//   import(/* webpackChunkName: "assets/js/components/utilities/count-up" */ '../components/utilities/CountUp.vue');
// const DoctorNetworkWizard = () =>
//   import(/* webpackChunkName: "components/doctor-network/doctor-network-wizard" */ '../components/doctor-network/DoctorNetworkWizard.vue');
// const DrugCard = () =>
//   import(/* webpackChunkName: "components/hgh/drug-card" */ '../components/hgh/DrugCard.vue');
// const EnrollmentLandingPage = () =>
//   import(/* webpackChunkName: "components/enrollment/enrollment-landing-page" */ '../components/enrollment/EnrollmentLandingPage.vue');
// const EventDetailsModal = () =>
//   import(/* webpackChunkName: "components/events/event-details-modal" */ '../components/events/EventDetailsModal.vue');
// const FeedbackSubmitter = () =>
//   import(/* webpackChunkName: "components/utilities/feedback-submitter" */ '../components/utilities/FeedbackSubmitter.vue');
// const HairNewsletterLink = () =>
//   import(/* webpackChunkName: "components/newsletter/hair-newsletter-link" */ '../components/newsletter/HairNewsletterLink.vue');
// const HcgPlayButtonVideoModal = () =>
//   import(/* webpackChunkName: "components/hcg-play-button-video-modal" */ '../components/HcgPlayButtonVideoModal.vue');
// const JoinUs = () =>
//   import(/* webpackChunkName: "components/join-us/join-us" */ '../components/join-us/join-us.vue');
// const LearnMore = () =>
//   import(/* webpackChunkName: "components/learn-more/learn-more" */ '../components/learn-more/learn-more.vue');
// const LoginForm = () =>
//   import(/* webpackChunkName: "components/login/login-form" */ '../components/login/LoginForm.vue');
// const MedicalIntakeLandingPage = () =>
//   import(/* webpackChunkName: "components/medical-intake/medical-intake-landing-page" */ '../components/medical-intake/MedicalIntakeLandingPage.vue');
// const NewsletterSignupForm = () =>
//   import(/* webpackChunkName: "components/newsletter/newsletter-signup-form" */ '../components/newsletter/NewsletterSignupForm.vue');
// const NewYearsCountdown = () =>
//   import(/* webpackChunkName: "assets/js/components/new-years/new-years-countdown" */ '../components/new-years/NewYearsCountdown.vue');
// const Particles = () =>
//   import(/* webpackChunkName: "components/utilities/particles" */ '../components/utilities/Particles.vue');
// const PatientFamilyHistoryForm = () =>
//   import(/* webpackChunkName: "components/misc/patient-family-history-form" */ '../components/misc/PatientFamilyHistoryForm.vue');
// const ProgramSummary = () =>
//   import(/* webpackChunkName: "components/enrollment/program-summary" */ '../components/enrollment/ProgramSummary.vue');
// const SingleProgramCart = () =>
//     import(/* webpackChunkName: "components/enrollment/single-program-cart" */ '../components/enrollment/SingleProgramCart.vue');
// const TeamSection = () =>
//   import(/* webpackChunkName: "components/about/team-section" */ '../components/about/TeamSection.vue');
// const WspNewsletterSignupButton = () =>
//   import(/* webpackChunkName: "components/wsp/wsp-newsletter-signup-button" */ '../components/wsp/WspNewsletterSignUpButton.vue');

// import FlashMessage from '../components/utilities/FlashMessage.vue';
// import SignupBanner from '../components/misc/SignupBanner.vue';

import Testimonials from './components/testimonials/Testimonials'
import 'swiper/dist/css/swiper.css'

if (window.VUE_ENABLED !== false) {
  new Vue({
    el: '#app',
    components: {
      Testimonials
    //   BlackFridayCouponRevealer,
    //   ChatConversation,
    //   CountUp,
    //   DoctorNetworkWizard,
    //   DrugCard,
    //   EnrollmentLandingPage,
    //   EventDetailsModal,
    //   FeedbackSubmitter,
    //   FlashMessage,
    //   JoinUs,
    //   LearnMore,
    //   HairNewsletterLink,
    //   HcgPlayButtonVideoModal,
    //   LoginForm,
    //   MedicalIntakeLandingPage,
    //   NewsletterSignupForm,
    //   NewYearsCountdown,
    //   Particles,
    //   PatientFamilyHistoryForm,
    //   ProgramSummary,
    //   SignupBanner,
    //   SingleProgramCart,
    //   TeamSection,
    //   WspNewsletterSignupButton,
    },
  })
}

// window.axios.defaults.headers.common['X-CSRF-TOKEN'] = window.Laravel.csrfToken;
// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

Array.from(document.querySelectorAll('.js-scroll-into-view')).forEach(node => {
  node.addEventListener('click', function(e) {
    e.preventDefault();

    const target = document.querySelector(
      this.href.substring(this.href.indexOf('#'))
    );

    target && target.scrollIntoView({ block: 'start', behavior: 'smooth' });
  });
});

// Basic layout nav toggle
const navToggle = document.querySelector('.button-menu');
const menu = document.querySelector('.menu');
const navContainer = document.querySelector('.nav-container');

console.log(navToggle)

if (navToggle && navContainer) {
  navToggle.addEventListener('click', e => {
    menu.classList.toggle('tw-hidden');
    menu.classList.toggle('tw-opacity-0');
    navContainer.classList.toggle('tw-flex');
  });
}
