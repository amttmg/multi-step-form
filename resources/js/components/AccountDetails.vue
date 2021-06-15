<template>
    <div>
        <fieldset class="border-blue px-3 pb-3" style="border-opacity: 0.5">
            <legend class="w-auto px-2 text-primary">Account Information:</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="branch">Branch</label>
                        <v-select id="branch" label="text" placeholder="Please Select"
                                  :options="branches"></v-select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="acType">Account Type</label>
                            <v-select placeholder="Please Select"
                                      :options="['Saving', 'Current', 'Loan']"></v-select>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="acNumber">Account Number</label>
                        <the-mask class="form-control"
                                  placeholder="Please enter 16 digit account number"
                                  :mask="['################']"/>
                    </div>
                </div>
            </div>
        </fieldset>
        <action-buttons :back="false" @next="$emit('next')" @back="$emit('back')"></action-buttons>
    </div>
</template>

<script>
    import {branches} from '../data'

    export default {
        name: "AccountDetails",
        data() {
            return {
                branches: branches,
            }
        },
    }
</script>

<style scoped>

</style>
