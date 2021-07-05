<template>
  <default-field :field="field" :errors="errors" :show-help-text="showHelpText" v-if="selectedEvent">
    <template slot="field">
      <vue-code-highlight language="javascript">
          {{value}}
        </vue-code-highlight>
    </template>
  </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova';

// You have to extract the component from the module
import { component as VueCodeHighlight } from 'vue-code-highlight';
import 'vue-code-highlight/themes/prism.css';

export default {
  mixins: [FormField, HandlesValidationErrors],
  components:{
    VueCodeHighlight,
  },
  props: ['resourceName', 'resourceId', 'field', 'linked_field', 'linked_field_check_value'],
  data() {
        return {
            selectedEvent: ''
        };
    },
  mounted(){
        if (this.field.linked_field) {
            this.seTimer = setInterval(() => {
                this.selectedEvent = '';
                const elemSelector = "#" + this.field.linked_field;
                if(document.querySelector(elemSelector).value == this.field.linked_field_check_value){
                    this.selectedEvent = document.querySelector(elemSelector).value;
                }
            }, 50);
        }
  },
  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.parseCodeInput(this.field.attribute) || ''
    },
    parseCodeInput(input){
        return input
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      // No need to fill, this is just a contextual view component
    },
  },
}
</script>
