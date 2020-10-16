<template>
    <div>
        <div class="user-profile page-section">
            <div class="container">
                <div class="manage mb-3">
                    <router-link to="/my-courses" class="main-btn"
                        >my courses</router-link
                    >
                    <router-link to="/my-careers" class="main-btn"
                        >my careers</router-link
                    >
                    <router-link to="/my-certifications" class="main-btn"
                        >my certificates</router-link
                    >
                    <router-link to="/my-articles" class="main-btn"
                        >my articles</router-link
                    >
                </div>
                <div class="card personal-information">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <form @submit.prevent="UpdateProfile">
                                    <div class="form-group">
                                        <input type="text" class="form-control" :class="{'is-invalid': form.errors.has('name')}"
                                            placeholder="name"
                                            v-model="form.name"
                                            required
                                        />
                                        <has-error
                                            :form="form"
                                            field="name"
                                        ></has-error>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="email"
                                            class="form-control"
                                            :class="{
                                                'is-invalid': form.errors.has(
                                                    'email'
                                                )
                                            }"
                                            placeholder="email"
                                            v-model="form.email"
                                            required
                                        />
                                        <has-error
                                            :form="form"
                                            field="email"
                                        ></has-error>
                                    </div>

                                    <div class="form-group">
                                        <div
                                            class="custom-control custom-radio custom-control-inline"
                                        >
                                            <input
                                                type="radio"
                                                id="customRadioInline1"
                                                name="customRadioInline1"
                                                class="custom-control-input"
                                                @change="managePass(false)"
                                                checked
                                            />
                                            <label
                                                class="custom-control-label"
                                                for="customRadioInline1"
                                                >Don't change my password</label
                                            >
                                        </div>
                                        <div
                                            class="custom-control custom-radio custom-control-inline"
                                        >
                                            <input
                                                type="radio"
                                                id="customRadioInline2"
                                                name="customRadioInline1"
                                                class="custom-control-input"
                                                @change="managePass(true)"
                                            />
                                            <label
                                                class="custom-control-label"
                                                for="customRadioInline2"
                                                >I want to change my
                                                password</label
                                            >
                                        </div>
                                    </div>
                                    <div
                                        class="form-group"
                                        v-show="passstatus == true"
                                    >
                                        <input
                                            type="password"
                                            class="form-control"
                                            :class="{
                                                'is-invalid': form.errors.has(
                                                    'newpassword'
                                                )
                                            }"
                                            placeholder="new password"
                                            v-model="form.newpassword"
                                        />
                                        <has-error
                                            :form="form"
                                            field="newpassword"
                                        ></has-error>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="text"
                                            class="form-control"
                                            :class="{
                                                'is-invalid': form.errors.has(
                                                    'country'
                                                )
                                            }"
                                            placeholder="country"
                                            v-model="form.country"
                                        />
                                        <has-error
                                            :form="form"
                                            field="country"
                                        ></has-error>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="number"
                                            class="form-control"
                                            :class="{
                                                'is-invalid': form.errors.has(
                                                    'phone'
                                                )
                                            }"
                                            placeholder="phone"
                                            v-model="form.phone"
                                        />
                                        <has-error
                                            :form="form"
                                            field="phone"
                                        ></has-error>
                                    </div>
                                    <div class="form-group">
                                        <input
                                            type="file"
                                            class="form-control"
                                            :class="{
                                                'is-invalid': form.errors.has(
                                                    'photo'
                                                )
                                            }"
                                            @change="uploading"
                                        />
                                        <has-error
                                            :form="form"
                                            field="photo"
                                        ></has-error>
                                    </div>
                                    <div class="form-group">
                                        <select
                                            class="form-control"
                                            :class="{
                                                'is-invalid': form.errors.has(
                                                    'gender'
                                                )
                                            }"
                                            v-model="form.gender"
                                        >
                                            <option selected>Gender</option>
                                            <option value="0">Male</option>
                                            <option value="1">Female</option>
                                        </select>
                                        <has-error
                                            :form="form"
                                            field="gender"
                                        ></has-error>
                                    </div>
                                    <div class="form-group">
                                        <textarea
                                            v-model="form.bio"
                                            class="form-control"
                                            :class="{
                                                'is-invalid': form.errors.has(
                                                    'bio'
                                                )
                                            }"
                                            cols="30"
                                            rows="5"
                                            placeholder="write some of your favorites,skills,hoppies,etc....."
                                        ></textarea>
                                                        <has-error :form="form" field="bio"></has-error>

                                    </div>
                                    <button
                                        type="submit"
                                        class="main-btn mt-3 mb-5"
                                    >
                                        Update Informations
                                    </button>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <div class="card">
                                    <img
                                        width="330"
                                        height="220"
                                        class="card-img-top"
                                        alt=" upload your image"
                                        :src="GetProfilePhoto()"
                                    />
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            {{ form.name | capitalize }}
                                        </h5>
                                        <h6
                                            class="card-subtitle mb-3 text-muted"
                                        >
                                            {{ form.email }}
                                            <span class="float-right">{{
                                                form.country | capitalize
                                            }}</span>
                                        </h6>
                                        <p class="card-text">{{ form.bio }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            passstatus: false,
            form: new Form({
                name: "",
                email: "",
                country: "",
                phone: "",
                photo: "",
                gender: "",
                newpassword: "",
                bio: ""
            })
        };
    },
    methods: {
        GetProfile() {
            axios.get("/weconnected/profile").then(res => {
                this.form.fill(res.data[0]);
            });
        },
        UpdateProfile() {
            this.$Progress.start();
            this.form
                .put("/weconnected/profile")
                .then(({ data }) => {
                    Swal.fire({
                        position: "top-end",
                        icon: "success",
                        title: "Your profile has been updated",
                        showConfirmButton: false,
                        timer: 1500
                    });
                    this.$Progress.finish();
                })
                .catch(() => {
                    this.$Progress.fail();
                });
        },
        uploading(element) {
            let file = element.target.files[0];
            let reader = new FileReader();
            if (file["size"] < 21111775) {
                reader.onloadend = file => {
                    this.form.photo = reader.result;
                };
                reader.readAsDataURL(file);
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "Something went wrong!",
                    footer: "<a href>Why do I have this issue?</a>"
                });
            }
        },
        managePass(status) {
            this.passstatus = status;
        },
        GetProfilePhoto() {
            if (this.form.photo != null) {
                let photo =
                    this.form.photo.length > 200
                        ? this.form.photo
                        : "/images/profile/" + this.form.photo;
                return photo;
            }
        }
    },
    created() {
        this.$Progress.start();
        this.GetProfile();
        this.$Progress.finish();
    }
};
</script>
