<template>
    <div>
        <input ref="file" :id="'file-'+index" @change="uploadDocument" type="file" class="file-upload"/>
        <label v-if="status===0" :for="'file-'+index" class="btn btn-light border"><i class="fa fa-folder-open"></i>
            Choose a file</label>
        <div v-else-if="status===1" class="progress my-3">
            <div class="progress-bar" role="progressbar" :style="'width: '+progress+'%;'" :aria-valuenow="progress"
                 aria-valuemin="0"
                 aria-valuemax="100">{{ progress }}%
            </div>
        </div>
        <div v-else>
            <div class="image-area">
                <viewer :images="[img]" :options="{toolbar:false, navbar: false, title:false}">
                    <img class="img img-thumbnail" :src="img" alt="" style="width:100%"/>
                </viewer>

                <button @click="removeImage" class="remove-image" href="#"
                        style="display: inline;text-decoration: none">&#215;
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    import UploadService from "../upload";

    export default {
        name: "UploadButton",
        data() {
            return {
                status: 0,
                progress: 0,
                img: ''
            }
        },
        props: ['index'],
        methods: {
            uploadDocument() {
                this.file = this.$refs.file.files[0];
                UploadService.upload(this.file, (event) => {
                    this.progress = Math.round(100 * event.loaded / event.total);
                    if (this.progress < 100) {
                        this.status = 1;
                    } else if (this.progress === 100) {
                        this.status = 2;
                    }
                }).then(res => {
                    this.img = res.data;
                })
            },
            removeImage() {
                this.img = '';
                this.status = 0;
            },
            toggle() {
                this.status = !this.status;
            }
        }
    }
</script>

<style scoped>

</style>
