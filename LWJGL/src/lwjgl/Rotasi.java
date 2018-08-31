/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package lwjgl;

import java.util.logging.Level;
import java.util.logging.Logger;
import org.lwjgl.LWJGLException;
import org.lwjgl.input.Keyboard;
import org.lwjgl.input.Mouse;
import org.lwjgl.opengl.Display;
import org.lwjgl.opengl.DisplayMode;
import static org.lwjgl.opengl.GL11.*;
import static org.lwjgl.util.glu.GLU.gluOrtho2D;

/**
 *
 * @author ZP
 */
public class Rotasi {
    public int DISPLAY_WIDTH = 800;
    public int DISPLAY_HEIGHT = 500;
    private float putar;
    
    public void render(){
        glClearColor(0.0f, 0.0f, 0.0f, 0.0f);
        glClear(GL_COLOR_BUFFER_BIT);
        glLoadIdentity();
        
        glTranslated(300,300,0);
        glColor3f(1.0f, 0.0f,0.0f);
//        BuatSegitiga();
        roda();
        glRotatef(putar, 0, 0, 1);
        glColor3f(0.0F, 0.0F, 1.0F);
        roda();
        putar+=15;
        glFlush();
        System.out.println("a");
    }
    
    public void roda(){
        glBegin(GL_POLYGON);
        glVertex2f(-50, -50);
        glVertex2f(50,-50);
        glVertex2f(50,50);
        glVertex2f(-50,50);
        glEnd();
    }
    
    public void BuatSegienam(){
    glBegin(GL_TRIANGLES);
    glColor3f(1.0f, 0.0f, 0.0f);
    glVertex2f(0,150);
    glColor3f(0.0f, 1.0f, 0.0f);
    glVertex2f(200,150);
    glColor3f(0.0f, 0.0f, 1.0f);
    glVertex2f(100,0);
    glEnd(); 
}
    
    public static void main (String[]args){
        Rotasi main = null;
        try {
            System.out.println("Keys :");
            System.out.println("esc - Exit");
            main = new Rotasi();
            main.create();
            main.run();
        } catch (Exception e) {
            Logger.getLogger(Rotasi.class.getName()).log(Level.SEVERE, null, e);
        } finally {
            if (main != null){
                main.distroy();
            }
        }
    }
    
    private void create() throws LWJGLException {
        Display.setDisplayMode(new DisplayMode(DISPLAY_WIDTH, DISPLAY_HEIGHT));
        Display.setFullscreen(false);
        Display.setTitle("ROTASI");
        Display.create();
        Keyboard.create();
        Mouse.setGrabbed(false);
        Mouse.create();
        initGL();
        resizeGL();
    }
    
    private void run(){
        while (!Display.isCloseRequested() && !Keyboard.isKeyDown(Keyboard.KEY_ESCAPE)) {
            if(Display.isVisible()){
                render();
            }else{
                if(Display.isDirty()){
                    render();
                }
                try {
                    Thread.sleep(100);
                } catch (InterruptedException e) {
                }
            }
            Display.update();
            Display.sync(60);
        }
    }
    
    private void distroy(){
        Mouse.destroy();
        Keyboard.destroy();
        Display.destroy();
    }
    
    void initGL(){
        glClearColor(0.0f,0.0f,0.0f,0.0f);
        glDisable(GL_DEPTH_TEST);
        glDisable(GL_LIGHTING);
    }
    
    private void resizeGL(){
        glViewport(0, 0, DISPLAY_WIDTH, DISPLAY_HEIGHT);
        glMatrixMode(GL_PROJECTION);
        glLoadIdentity();
        gluOrtho2D(0.0f, DISPLAY_WIDTH, 0.0f, DISPLAY_HEIGHT);
        glPushMatrix();
        glMatrixMode(GL_MODELVIEW);
        glLoadIdentity();
        glPushMatrix();
    }
}