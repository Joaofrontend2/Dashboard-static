let allVue = new Vue({
  el: "#app",
  template: `
  <section class="comment">
    <div class="title-comments">
        <h1>comments</h1>
    </div>
    <div class="col-12 col-md-12">
        <form action="">
            <div class="form-group"  >
                <label for="name">name</label>
                <input type="text" class="form-control" name="name" v-model="name">
            </div>
            <div class="form-group" >
                <label for="name">describe your message</label>
                <textarea name="" class="form-control" v-model="message" id="" rows="5" ></textarea>
            </div>
            <div class="form-group">
                <button @click='addComment' type="button" class="comment-btn">comment</button>
            </div>
        </form>
    </div>
    <div class="col-12 col-md-12">
        <div class="personal-mesage" v-for='(comment,index) in allComments'>
            <span>autor:{{ comment.name}}</span>
            <div class="star-solid">
            <label class="fa-solid fa-star"></label>
            <label class="fa-solid fa-star"></label>
            <label class="fa-solid fa-star"></label>
            <label class="fa-solid fa-star"></label>
            <label class="fa-solid fa-star"></label>
            </div>
            <p>{{comment.message}}</p>
            <a href="#" @click.prevent="removeComment(index)">remove</a>
        </div>
    </div>
 </section>`,

  data() {
    return {
      comments: [
        {
          name: "joao",
          message: "teste",
        },
      ],
      name: "",
      message: "",
    };
  },
  methods: {
    addComment() {
      if (this.message.trim() === "") {
        return;
      }

      this.comments.push({
        name: this.name,
        message: this.message,
      });
      (this.name = ""), (this.message = "");
    },
    removeComment(index) {
      this.comments.splice(index, 1);
    },
  },
  computed: {
    allComments() {
      return this.comments.map((comment) => ({
        ...comment,
        name: comment.name.trim() === "" ? "anonimo" : comment.name,
      }));
    },
  },
});
