blog_posts = { "Python": ["this is first ", "This is second" ," this is last"],"javascript": ["this is first ", "This is second" ," this is last"] }

for catagory in blog_posts:
    print("the posts for", catagory)
    for blogs in blog_posts[catagory]:
        print(blogs)