<template>
    <div>
        <fieldset class="border-blue px-3 pb-3" style="border-opacity: 0.5">
            <legend class="w-auto px-2 text-primary">Verify Details:</legend>
            <table class="table table-bordered">
                <tr class="bg-light">
                    <th colspan="2" class="text-center">Account Details</th>
                </tr>
                <tr>
                    <td>
                        Account No:
                    </td>
                    <td>
                        {{data.accountInfo.acNumber}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Branch:
                    </td>
                    <td>
                        {{data.accountInfo.branch.text}}
                    </td>
                </tr>
                <tr>
                    <td>
                        Account Type:
                    </td>
                    <td>
                        {{data.accountInfo.acType}}
                    </td>
                </tr>
                <tr class="bg-light">
                    <th colspan="2" class="text-center">Personal Details</th>
                </tr>
                <tr>
                    <td>
                        Account No:
                    </td>
                    <td>
                        2010100021206011
                    </td>
                </tr>
                <tr>
                    <td>
                        Branch:
                    </td>
                    <td>
                        Dhankuta
                    </td>
                </tr>
                <tr>
                    <td>
                        Account Type:
                    </td>
                    <td>
                        Saving
                    </td>
                </tr>
            </table>
        </fieldset>
    </div>
</template>

<script>
    export default {
        name: "ConfirmDetails",
        props: ['data']
    }
</script>

<style scoped>

</style>
