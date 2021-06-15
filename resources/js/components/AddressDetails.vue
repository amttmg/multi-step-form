<template>
    <div>
        <fieldset class="border-blue px-3 pb-3" style="border-opacity: 0.5">
            <legend class="w-auto px-2 text-primary">Permanent Address:</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="province">Province</label>
                        <v-select v-on:input="changePermanentProvince" label="text"
                                  :options="proviences"
                                  placeholder="Please Select"></v-select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="district">District: </label>
                        <v-select v-on:input="changePermanentDistrict" label="districtName"
                                  :options="permanentDistrictsList"
                                  placeholder="Please Select"></v-select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="Municipality">Municipality: </label>
                        <v-select label="municipalityName" :options="permanentMunicipalityList"
                                  placeholder="Please Select"></v-select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tole">Tole/Street</label>
                        <input type="text" class="form-control" id="tole"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ward">Ward No</label>
                        <input type="text" class="form-control" id="ward"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address"/>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="border-blue px-3 pb-3" style="border-opacity: 0.5">
            <legend class="w-auto px-2 text-primary">Current Address:</legend>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="province">Province</label>
                        <v-select v-on:input="changeCurrentProvince" label="text"
                                  :options="proviences"
                                  placeholder="Please Select"></v-select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="district">District: </label>
                        <v-select v-on:input="changeCurrentDistrict" label="districtName"
                                  :options="currentDistrictsList"
                                  placeholder="Please Select"></v-select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="Municipality">Municipality: </label>
                        <v-select label="municipalityName" :options="currentMunicipalityList"
                                  placeholder="Please Select"></v-select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="tole">Tole/Street</label>
                        <input type="text" class="form-control" id="tole"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ward">Ward No</label>
                        <input type="text" class="form-control" id="ward"/>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address"/>
                    </div>
                </div>
            </div>
        </fieldset>
        <action-buttons @next="$emit('next')" @back="$emit('back')"></action-buttons>
    </div>
</template>

<script>
    import {proviences} from '../data'
    import {getDistricts, getMunicipalities} from '../functions'

    export default {
        name: "AddressDetails",
        data() {
            return {
                proviences: proviences,
                permanentDistrictsList: [],
                currentDistrictsList: [],
                permanentMunicipalityList: [],
                currentMunicipalityList: [],
            }
        },
        methods: {
            changeCurrentProvince(e) {
                getDistricts(e.value).then(res => {
                    this.currentDistrictsList = res.data;
                })
            },
            changeCurrentDistrict(e) {
                getMunicipalities(e.id).then(res => {
                    this.currentMunicipalityList = res.data;
                })
            },
            changePermanentProvince(e) {
                getDistricts(e.value).then(res => {
                    this.permanentDistrictsList = res.data;
                })
            },
            changePermanentDistrict(e) {
                getMunicipalities(e.id).then(res => {
                    this.permanentMunicipalityList = res.data;
                })
            },
        }
    }
</script>

<style scoped>

</style>
