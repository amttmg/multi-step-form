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
                                <upload-button index="1"/>
                            </td>
                        </tr>
                        <tr>
                            <td>2.</td>
                            <td><strong>Citizenship Back</strong></td>
                            <td>
                                <upload-button index="2"/>
                            </td>
                        </tr>
                        <tr>
                            <td>3.</td>
                            <td><strong>Photo</strong></td>
                            <td>
                                <upload-button index="3"/>
                            </td>
                        </tr>

                        <tr>
                            <td>4.</td>
                            <td><strong>Signature</strong></td>
                            <td><upload-button index="4"/></td>
                        </tr>
                        <tr>
                            <td>5.</td>
                            <td><strong>Electricity Bill</strong></td>
                            <td><upload-button index="5"/></td>
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
        components: {UploadButton}
    }
</script>

<style scoped>

</style>
