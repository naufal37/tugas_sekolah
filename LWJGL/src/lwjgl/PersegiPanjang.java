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
 * @author naufal
 */
public class PersegiPanjang {
    public int DISPLAY_WIDTH = 600; public int DISPLAY_HEIGHT = 800;

public void draw(){}

public void render(){ glClear(GL_COLOR_BUFFER_BIT);
glLoadIdentity(); 
glColor3d(1,0,0); 
buatKotak();
glFlush();
}

public void buatKotak(){
//membuat kotak 
glBegin(GL_POLYGON);
glVertex2f(250,120); //titik kiri bawah 
glVertex2f(450,120); //titik kanan bawah 
glVertex2f(450,200); //titik kanan atas 
glVertex2f(250,200); //titik kiri atas 
glEnd();
}

public void create()throws LWJGLException{ Display.setDisplayMode(new 
    DisplayMode(DISPLAY_HEIGHT,DISPLAY_WIDTH));
    Display.setFullscreen(false); 
    Display.setTitle("Menggambar Persegi Panjang"); 
    Display.create();
    initGL(); 
    resizeGL();
}

void initGL(){ 
    glClearColor(0.0f,1.0f,1.0f,1.0f); 
    glDisable(GL_DEPTH_TEST); 
    glDisable(GL_LIGHTING);
}

public void resizeGL(){ 
    glViewport(0,0,DISPLAY_HEIGHT,DISPLAY_WIDTH);
    glMatrixMode(GL_PROJECTION); 
    glLoadIdentity();
    gluOrtho2D(0.0f,DISPLAY_HEIGHT,0.0f,DISPLAY_WIDTH);
    glPushMatrix(); 
    glMatrixMode(GL_MODELVIEW); 
    glLoadIdentity(); 
    glPushMatrix();
}

public void run(){ while(!Display.isCloseRequested() &&
!Keyboard.isKeyDown(Keyboard.KEY_ESCAPE)){ if(Display.isVisible()){
update();
render();
}else{
if(Display.isDirty()){ render();
}try {
Thread.sleep(100);
} catch (InterruptedException ex) {}
}
Display.update(); Display.sync(60);
}
}

private void update(){
}

private void destroy(){ Mouse.destroy(); Keyboard.destroy(); Display.destroy();
}

public static void main(String[] args) { PersegiPanjang b1 = new PersegiPanjang(); try {
b1.create();
b1.run();
} catch (LWJGLException ex) {

Logger.getLogger(PersegiPanjang.class.getName()).log(Level.SEVERE, null, ex);
}
}
}