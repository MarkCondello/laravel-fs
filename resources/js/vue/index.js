import Vue from 'vue';

// Vue.prototype.csrf = csrf;
Vue.prototype.Foundation = Foundation;
Vue.prototype.eventBus = new Vue();

// Custom click out directive lets us bind events
// to elements by adding "v-on-clickout=" attribute
Vue.directive('clickout', {
    bind: (el, binding, vnode) => {
      el.clickOutsideEvent = (event) => {
        if (!(el == event.target || el.contains(event.target))) {
          vnode.context[binding.expression](event);
        }
      };
      document.body.addEventListener('click', el.clickOutsideEvent)
    },
    unbind: (el) => {
      document.body.removeEventListener('click', el.clickOutsideEvent)
    },
});

const app = new Vue({
    el: '#app',
    components: {
      'accessories-slider': require('./AccessoriesSlider').default,
      'multi-select': require('./MultiSelect').default,
      'search-sort-table': require('./SearchSortTable').default,
      'project-tasks' : require('./ProjectTasks').default,
    },
});