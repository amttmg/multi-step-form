<template>
    <div>
        <fieldset class="border-blue px-3 pb-3" style="border-opacity: 0.5">
            <legend class="w-auto px-2 text-primary">Verify Details:</legend>
            <show-at breakpoint="mediumAndBelow">
                <table class="table table-bordered">
                    <tr class="bg-light">
                        <th colspan="2" class="text-center">Account Details</th>
                    </tr>
                    <tr>
                        <th width="50%">
                            Account No:
                        </th>
                        <td width="50%">
                            {{data.accountInfo.acNumber}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Branch:
                        </th>
                        <td>
                            {{data.accountInfo.branch.text}}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Account Type:
                        </th>
                        <td>
                            {{data.accountInfo.acType}}
                        </td>
                    </tr>
                    <tr class="bg-light">
                        <th colspan="2" class="text-center">Personal Details</th>
                    </tr>
                    <tr>
                        <th width="25%">
                            Full Name:
                        </th>
                        <td width="25%">
                            {{data.personalInfo.initial}}
                            {{data.personalInfo.firstName}}
                            {{data.personalInfo.middleName}}
                            {{data.personalInfo.lastName}}
                        </td>
                    </tr>
                    <tr>
                        <th>Email:</th>
                        <td>{{data.personalInfo.email}}</td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td>{{data.personalInfo.mobileNo}}</td>
                    </tr>
                    <tr>
                        <th>
                            Nationality
                        </th>
                        <td>{{data.personalInfo.nationality}}</td>
                    </tr>
                    <tr>
                        <th>Marital Status:</th>
                        <td>{{data.personalInfo.maritalStatus}}</td>
                    </tr>
                    <tr>
                        <th>
                            Religion
                        </th>
                        <td>{{data.personalInfo.religion}}</td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td>{{data.personalInfo.gender}}</td>
                    </tr>
                    <tr>
                        <th>
                            Education
                        </th>
                        <td>{{data.personalInfo.education}}</td>
                    </tr>
                    <tr>
                        <th>Spouse Name:</th>
                        <td>{{data.personalInfo.spouseName}}</td>
                    </tr>
                    <tr>
                        <th>
                            Grand Father Name:
                        </th>
                        <td>{{data.personalInfo.grandfatherName}}</td>
                    </tr>
                    <tr>
                        <th>Father Name:</th>
                        <td>{{data.personalInfo.fatherName}}</td>
                    </tr>
                    <tr>
                        <th>
                            Mother Name:
                        </th>
                        <td>{{data.personalInfo.motherName}}</td>
                    </tr>
                    <tr>
                        <th>Citizenship Certificate No:</th>
                        <td>{{data.personalInfo.ctzNumber}}</td>
                    </tr>
                    <tr>
                        <th>
                            Issuing District :
                        </th>
                        <td>{{data.personalInfo.ctzIssuingDistrict.text}}</td>
                    </tr>
                    <tr>
                        <th>Issuing Authority:</th>
                        <td>{{data.personalInfo.ctzIssuingAuthority}}</td>
                    </tr>
                    <tr>
                        <th>
                            Issued Date(B.S.):
                        </th>
                        <td>{{data.personalInfo.ctzIssueDate}}</td>
                    </tr>
                    <tr class="bg-light">
                        <th colspan="2" class="text-center">Current Address</th>
                    </tr>
                    <tr>
                        <th>Province:</th>
                        <td>{{data.addressInfo.currentAddress.province.text}}</td>
                    </tr>
                    <tr>
                        <th>District:</th>
                        <td>{{data.addressInfo.currentAddress.district.districtName}}</td>
                    </tr>
                    <tr>
                        <th>Municipality:</th>
                        <td>{{data.addressInfo.currentAddress.municipality.municipalityName}}</td>
                    </tr>
                    <tr>
                        <th>Ward No:</th>
                        <td>{{data.addressInfo.currentAddress.ward}}</td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td>{{data.addressInfo.currentAddress.address}}</td>
                    </tr>
                    <tr class="bg-light">
                        <th colspan="2" class="text-center">Permanent Address</th>
                    </tr>
                    <tr>
                        <th>
                            Province:
                        </th>
                        <td>{{data.addressInfo.permanentAddress.province.text}}</td>
                    </tr>
                    <tr>
                        <th>
                            District:
                        </th>
                        <td>{{data.addressInfo.permanentAddress.district.districtName}}</td>
                    </tr>
                    <tr>
                        <th>
                            Municipality:
                        </th>
                        <td>{{data.addressInfo.permanentAddress.municipality.municipalityName}}</td>
                    </tr>
                    <tr>
                        <th>
                            Ward No:
                        </th>
                        <td>{{data.addressInfo.permanentAddress.ward}}</td>
                    </tr>
                    <tr>
                        <th>
                            Address:
                        </th>
                        <td>{{data.addressInfo.permanentAddress.address}}</td>
                    </tr>
                    <tr class="bg-light">
                        <th colspan="2" class="text-center">Documents</th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            Citizenship
                            <div class="image-area">
                                <viewer :images="[data.documentsInfo.citizenship]"
                                        :options="{toolbar:false, navbar: false, title:false}">
                                    <img class="img img-thumbnail" :src="data.documentsInfo.citizenship" alt=""
                                         style="width:400px"/>
                                </viewer>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            Photo:
                            <div class="image-area">
                                <viewer :images="[data.documentsInfo.photo]"
                                        :options="{toolbar:false, navbar: false, title:false}">
                                    <img class="img img-thumbnail" :src="data.documentsInfo.photo" alt=""
                                         style="width:400px"/>
                                </viewer>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            Signature
                            <div class="image-area">
                                <viewer :images="[data.documentsInfo.signature]"
                                        :options="{toolbar:false, navbar: false, title:false}">
                                    <img class="img img-thumbnail" :src="data.documentsInfo.signature" alt=""
                                         style="width:400px"/>
                                </viewer>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            Electricity Bill
                            <viewer :images="[data.documentsInfo.electricityBill]"
                                    :options="{toolbar:false, navbar: false, title:false}">
                                <img class="img img-thumbnail" :src="data.documentsInfo.electricityBill" alt=""
                                     style="width:400px"/>
                            </viewer>
                        </th>
                    </tr>
                </table>
            </show-at>
            <show-at breakpoint="largeAndAbove">
                <table class="table table-bordered">
                    <tr class="bg-light">
                        <th colspan="4" class="text-center">Account Details</th>
                    </tr>
                    <tr>
                        <th colspan="2" width="50%">
                            Account No:
                        </th>
                        <td colspan="2" width="50%">
                            {{data.accountInfo.acNumber}}
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            Branch:
                        </th>
                        <td colspan="2">
                            {{data.accountInfo.branch.text}}
                        </td>
                    </tr>
                    <tr>
                        <th colspan="2">
                            Account Type:
                        </th>
                        <td colspan="2">
                            {{data.accountInfo.acType}}
                        </td>
                    </tr>
                    <tr class="bg-light">
                        <th colspan="4" class="text-center">Personal Details</th>
                    </tr>
                    <tr>
                        <th width="25%">
                            Full Name:
                        </th>
                        <td width="25%">
                            {{data.personalInfo.initial}}
                            {{data.personalInfo.firstName}}
                            {{data.personalInfo.middleName}}
                            {{data.personalInfo.lastName}}
                        </td>
                        <th>Email:</th>
                        <td>{{data.personalInfo.email}}</td>
                    </tr>
                    <tr>
                        <th>Phone:</th>
                        <td>{{data.personalInfo.mobileNo}}</td>
                        <th>
                            Nationality
                        </th>
                        <td>{{data.personalInfo.nationality}}</td>
                    </tr>
                    <tr>
                        <th>Marital Status:</th>
                        <td>{{data.personalInfo.maritalStatus}}</td>
                        <th>
                            Religion
                        </th>
                        <td>{{data.personalInfo.religion}}</td>
                    </tr>
                    <tr>
                        <th>Gender:</th>
                        <td>{{data.personalInfo.gender}}</td>
                        <th>
                            Education
                        </th>
                        <td>{{data.personalInfo.education}}</td>
                    </tr>
                    <tr>
                        <th>Spouse Name:</th>
                        <td>{{data.personalInfo.spouseName}}</td>
                        <th>
                            Grand Father Name:
                        </th>
                        <td>{{data.personalInfo.grandfatherName}}</td>
                    </tr>
                    <tr>
                        <th>Father Name:</th>
                        <td>{{data.personalInfo.fatherName}}</td>
                        <th>
                            Mother Name:
                        </th>
                        <td>{{data.personalInfo.motherName}}</td>
                    </tr>
                    <tr>
                        <th>Citizenship Certificate No:</th>
                        <td>{{data.personalInfo.ctzNumber}}</td>
                        <th>
                            Issuing District :
                        </th>
                        <td>{{data.personalInfo.ctzIssuingDistrict.text}}</td>
                    </tr>
                    <tr>
                        <th>Issuing Authority:</th>
                        <td>{{data.personalInfo.ctzIssuingAuthority}}</td>
                        <th>
                            Issued Date(B.S.):
                        </th>
                        <td>{{data.personalInfo.ctzIssueDate}}</td>
                    </tr>
                    <tr class="bg-light">
                        <th colspan="4" class="text-center">Address Details</th>
                    </tr>
                    <tr>
                        <th colspan="2" class="text-center">Current Address</th>
                        <th colspan="2" class="text-center">Permanent Address</th>
                    </tr>
                    <tr>
                        <th>Province:</th>
                        <td>{{data.addressInfo.currentAddress.province.text}}</td>
                        <th>
                            Province:
                        </th>
                        <td>{{data.addressInfo.permanentAddress.province.text}}</td>
                    </tr>
                    <tr>
                        <th>District:</th>
                        <td>{{data.addressInfo.currentAddress.district.districtName}}</td>
                        <th>
                            District:
                        </th>
                        <td>{{data.addressInfo.permanentAddress.district.districtName}}</td>
                    </tr>
                    <tr>
                        <th>Municipality:</th>
                        <td>{{data.addressInfo.currentAddress.municipality.municipalityName}}</td>
                        <th>
                            Municipality:
                        </th>
                        <td>{{data.addressInfo.permanentAddress.municipality.municipalityName}}</td>
                    </tr>
                    <tr>
                        <th>Ward No:</th>
                        <td>{{data.addressInfo.currentAddress.ward}}</td>
                        <th>
                            Ward No:
                        </th>
                        <td>{{data.addressInfo.permanentAddress.ward}}</td>
                    </tr>
                    <tr>
                        <th>Address:</th>
                        <td>{{data.addressInfo.currentAddress.address}}</td>
                        <th>
                            Address:
                        </th>
                        <td>{{data.addressInfo.permanentAddress.address}}</td>
                    </tr>
                    <tr class="bg-light">
                        <th colspan="4" class="text-center">Documents</th>
                    </tr>
                    <tr>
                        <th colspan="2">
                            Citizenship
                            <div class="image-area">
                                <viewer :images="[data.documentsInfo.citizenship]"
                                        :options="{toolbar:false, navbar: false, title:false}">
                                    <img class="img img-thumbnail" :src="data.documentsInfo.citizenship" alt=""
                                         style="width:400px"/>
                                </viewer>
                            </div>
                        </th>
                        <td colspan="2">
                            Photo:
                            <div class="image-area">
                                <viewer :images="[data.documentsInfo.photo]"
                                        :options="{toolbar:false, navbar: false, title:false}">
                                    <img class="img img-thumbnail" :src="data.documentsInfo.photo" alt=""
                                         style="width:400px"/>
                                </viewer>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            Signature
                            <div class="image-area">
                                <viewer :images="[data.documentsInfo.signature]"
                                        :options="{toolbar:false, navbar: false, title:false}">
                                    <img class="img img-thumbnail" :src="data.documentsInfo.signature" alt=""
                                         style="width:400px"/>
                                </viewer>
                            </div>
                        </td>
                        <td colspan="2">
                            Electricity Bill
                            <viewer :images="[data.documentsInfo.electricityBill]"
                                    :options="{toolbar:false, navbar: false, title:false}">
                                <img class="img img-thumbnail" :src="data.documentsInfo.electricityBill" alt=""
                                     style="width:400px"/>
                            </viewer>
                        </td>
                    </tr>
                </table>
            </show-at>
        </fieldset>
        <action-buttons :next="false" :submit="true" @back="$emit('back')" @submit="$emit('submit')"></action-buttons>
    </div>
</template>

<script>
    import {showAt, hideAt} from 'vue-breakpoints'

    export default {
        name: "ConfirmDetails",
        data() {
            return {
                breakpoints: {small: 576, medium: 768, large: 992}
            }
        },
        components: {hideAt, showAt},
        props: ['data']
    }
</script>

<style scoped>

</style>
