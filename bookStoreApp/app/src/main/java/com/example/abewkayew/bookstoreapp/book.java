package com.example.abewkayew.bookstoreapp;

/**
 * Created by user on 3/22/2018.
 */

public class book {
    private String book_name, author_name, book_desc;
    //constructor for the class book
    public book(String book_name, String author_name, String book_desc){

        this.setBook_name(book_name);
        this.setAuthor_name(author_name);
        this.setBook_desc(book_desc);

    }
    public void setBook_name(String book_name) {
        this.book_name = book_name;
    }

    public void setAuthor_name(String author_name) {
        this.author_name = author_name;
    }

    public void setBook_desc(String book_desc) {
        this.book_desc = book_desc;
    }

    public String getBook_name() {
        return book_name;
    }

    public String getAuthor_name() {
        return author_name;
    }

    public String getBook_desc() {
        return book_desc;
    }
}
