const browse_baseurl = "./components/browse/";
const program_baseurl = "./components/program/";
const blog_baseurl = "./components/blog/";
const exam_baseurl = "./components/exam/";

export const routes = [
    // {
    //     path: "/",
    //     component: require("./components/home.vue").default
    // },
    // {
    //     path: "/home",
    //     component: require("./components/home.vue").default
    // },
    {
        path: "/profile",
        component: require("./components/profile.vue").default
    },
    {
        path: "/my-courses",
        component: require("./components/my-courses.vue")
            .default
    },
    {
        path: "/my-careers",
        component: require("./components/my-careers.vue")
            .default
    },
    {
        path: "/my-certifications",
        component: require("./components/my-certifications.vue").default
    },
    {
        path: "/my-articles",
        component: require("./components/my-articles.vue").default
    },
    {
        path: "/my-articles/:slug/edit",
        component: require("./components/edit-article.vue").default
    },

    // program routes
    {
        path: "/fields",
        component: require(program_baseurl + "fields.vue").default
    },
    {
        path: "/field-desc/:slug",
        component: require(program_baseurl + "field-desc.vue").default
    },
    {
        path: "/field/:slug",
        component: require(program_baseurl + "field-programs.vue").default
    },
    {
        path: "/program/:slug",
        component: require(program_baseurl + "program-courses.vue").default
    },
    {
        path: "/program/:program_slug/course/:course_slug",
        component: require(program_baseurl + "program-lessons.vue").default
    },

    // browse routes
    {
        path: "/courses",
        component: require(browse_baseurl + "courses.vue").default
    },
    {
        path: "/course/:slug",
        component: require(browse_baseurl + "course.vue").default
    },
    {
        path: "/course/:slug/lessons",
        component: require(browse_baseurl + "lessons.vue").default
    },
    // blog routes
    {
        path: "/blog",
        component: require(blog_baseurl + "articles.vue").default
    },
    {
        path: "/add-article",
        component: require(blog_baseurl + "add-article.vue").default
    },
    {
        path: "/blog/:article_slug",
        component: require(blog_baseurl + "single-article.vue").default
    },
    {
        path: "/blog/category/:category_slug",
        component: require(blog_baseurl + "category-articles.vue").default
    },
    // quiz routes
    {
        path: "/tests",
        component: require(exam_baseurl + "tests.vue").default
    },
    {
        path: "/test/:exam_slug/questions",
        component: require(exam_baseurl + "quiz.vue").default
    },
];
