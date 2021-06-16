<template>
    <div>
        <fieldset class="border-blue px-3 pb-3" style="border-opacity: 0.5">
            <legend class="w-auto px-2 text-primary">Document Upload:</legend>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-bordered">
                        <tr>
                            <td width="10%">1.</td>
                            <td width="50%"><strong>Citizenship Front</strong></td>
                            <td width="40%">
                                <upload-button v-model="documents.citizenship" index="1"/>
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td><strong>Photo</strong></td>
                            <td>
                                <upload-button v-model="documents.photo" index="3"/>
                            </td>
                        </tr>

                        <tr>
                            <td>4.</td>
                            <td><strong>Signature</strong></td>
                            <td>
                                <upload-button v-model="documents.signature" index="4"/>
                            </td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td><strong>Electricity Bill</strong></td>
                            <td>
                                <upload-button v-model="documents.electricityBill" index="5"/>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </fieldset>
        <action-buttons @next="$emit('next')" @back="$emit('back')"></action-buttons>
    </div>
</template>

<script>
    import UploadButton from "./UploadButton";

    export default {
        name: "UploadFiles",
        components: {UploadButton},
        watch: {
            documents: {
                handler(val) {
                    this.$emit('input', val)
                },
                deep: true
            }
        },
        data() {
            return {
                documents: {
                    citizenship: '',
                    photo: '',
                    signature: '',
                    electricityBill: ''
                }
            }
        }
    }
</script>

<style scoped>

</style>
