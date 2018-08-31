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
import static com.sun.xml.internal.ws.spi.db.BindingContextFactory.LOGGER;

/**
 *
 * @author naufal
 */
public class Dimensi {
    public int DISPLAY_WIDTH = 800;
    public int DISPLAY_HEIGHT = 500;
    
    
    public void render(){
        glClearColor(0.0f, 0.0f, 0.0f, 0.0f);
        glClear(GL_COLOR_BUFFER_BIT);
        glLoadIdentity();
        glBegin(GL_POLYGON);
        glColor3f(0.0f, 1.0f, 1.0f);
        glVertex2f(100, 100);
        glVertex2f(300, 100);
        glVertex2f(300, 300);
        glVertex2f(100, 300);
        glEnd();
        glBegin(GL_POLYGON);
        glColor3f(0.0f, 1.0f, 0.0f);
        glVertex2f(100, 300);
        glVertex2f(200, 350);
        glVertex2f(400, 350);
        glVertex2f(300, 300);
        glEnd();
        glBegin(GL_POLYGON);
        glColor3f(1.0f, 1.0f, 0.0f);
        glVertex2f(300, 100);
        glVertex2f(300, 300);
        glVertex2f(400, 350);
        glVertex2f(400, 175);
        glEnd();
        glFlush();
    }
    
    public static void main (String[]args){
    Dimensi main = null;
    try{
        System.out.println("Keys : ");
        System.out.println("esc -Exit");
        main = new Dimensi();
        main.create();
        main.run();
    } catch (Exception ex){
    LOGGER.log(Level.SEVERE, ex.toString(),ex );
        }
    
    finally{
    if (main !=null){ main.destroy();}
    
    }
    
    
    }
    
    public void create() throws LWJGLException{
    Display.setDisplayMode(new DisplayMode(DISPLAY_WIDTH, DISPLAY_HEIGHT));
    Display.setFullscreen(false);
            Display.setTitle("3D Naufal");
            Display.create();
            Keyboard.create();
//            Mouse.setGrabbed(false);
            Mouse.setGrabbed(false);
            Mouse.create();
            initGL();
            resizeGL();
    
    
    
    
    
    
    
    
    
    
    
    }
    
    private void run(){
    while (!Display.isCloseRequested() && !Keyboard.isKeyDown(Keyboard.KEY_ESCAPE))
        {if (Display.isVisible())
            {
                render();
            }
                else{
            if (Display.isDirty())
                        {
                            render();
                        }
        try {Thread.sleep(100);} catch (InterruptedException ex){}
        } 
    Display.update();
    Display.sync(60);
        } 
    
    
    
    
    
    }
    private void initGL(){
        glClearColor(0.0f, 0.0f, 0.0f, 0.0f);
        glDisable(GL_DEPTH_TEST);
        glDisable(GL_LIGHTING);
    }
    private void destroy(){
        Mouse.destroy();
        Keyboard.destroy();
        Display.destroy();
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
